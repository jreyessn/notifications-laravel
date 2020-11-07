<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ $url }}logo.png" class="logo" alt="Norson Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
