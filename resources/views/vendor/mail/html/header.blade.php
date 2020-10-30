<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('logo.png') }}" class="logo" alt="Norson Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
