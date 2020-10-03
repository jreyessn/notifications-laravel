<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Notifications\Users\PasswordResetRequest;
use App\Notifications\Users\PasswordResetSuccess;
use App\Repositories\Users\UserRepositoryEloquent;
use App\Http\Requests\Auth\ResetPasswordWithTokenRequest;
use App\Repositories\PasswordReset\PasswordResetRepositoryEloquent;

class ResetPasswordController extends Controller
{
/**
     * @var $repository
     */
    protected $passwordResetRepository;
    protected $userRepository;

    /**
     * @var $responseCode
     */
    protected $responseCode = 200;

    /**
     * @var $is_prospect
     */
    protected $is_prospect;

    public function __construct(UserRepositoryEloquent $userRepository, PasswordResetRepositoryEloquent $passwordResetRepository)
    {
        $this->middleware('throttle:7,2', ['except' => 'reset']);
        $this->userRepository = $userRepository;
        $this->passwordResetRepository = $passwordResetRepository;
    }

    /**
     * Create token password reset
     *
     * @param  [string] email
     * @return [string] message
     */
    public function create(Request $request)
    {

        $request->validate([
            'email' =>  'required|string|email|max:100',
            'url'   =>  'required|string'
        ]);

        $user = $this->userRepository->findWhere(['email' => $request->email])->first();

        if (!$user){
            return response()->json([
                'message' => __('passwords.user')
            ], 404);
        }

        $passwordReset = $this->passwordResetRepository->updateOrCreate(
            ['email' => $user->email],
            [
                'email' => $user->email,
                'token' => Str::random(60)
            ]
        );

        if ($user && $passwordReset)
        {
            $user->notify(
                new PasswordResetRequest($passwordReset->token)
            );
        }

        return response()->json([
            'message' => __('passwords.sent')
        ]);
    }
    /**
     * Find token password reset
     *
     * @param  [string] $token
     * @return [string] message
     * @return [json] passwordReset object
     */
    public function find($token)
    {
        $passwordReset = $this->passwordResetRepository->findWhere([
            ['token','=',$token]
        ])
        ->first();
        if (!$passwordReset)
            return response()->json([
                'message' => __('passwords.token')
            ], 404);
        if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();
            return response()->json([
                'message' => __('passwords.token')
            ], 404);
        }
        return response()->json($passwordReset);
    }
     /**
     * Reset password
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @param  [string] token
     * @return [string] message
     * @return [json] user object
     */
    public function reset(ResetPasswordWithTokenRequest $request)
    {
        $passwordReset = $this->passwordResetRepository->findWhere([
            ['token','=',$request->token]
        ])->first();

        if (!$passwordReset){
            return response()->json([
                'message' => __('passwords.token')
            ], 404);
        }

        $user = $this->userRepository->findWhere([
            ['email','=',$passwordReset->email]
        ])
        ->first();

        if (!$user){
            return response()->json([
                'message' => __('passwords.user')
            ], 404);
        }

        $user->password = $request->password;
        $user->password_changed_at = date();
        $user->save();
        $passwordReset->delete();
        $user->notify(new PasswordResetSuccess($passwordReset));
        return response()->json($user);
    }
}
