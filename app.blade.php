@php $locale = session()->get('locale'); @endphp
@php $languagesArr =  [ array('name'=>'English', 'lang_code'=>'en'), array('name'=>'English', 'lang_code'=>'en') ]; @endphp

@foreach($languagesArr as $lang)	
	<a class="dropdown-item" href="{{route('LangChange', 'lang_key='.strtolower($lang['lang_code']) )}}">{{$lang['name']}}</a>
@endforeach

						


<!--Other links-->

<li class="nav-item"> <a class="nav-link" href="{{url(app()->getLocale())}}"> @lang("home")</a> </li>
<li class="nav-item"> <a class="nav-link" href="{{url(app()->getLocale(), 'what-is-vpn')}}">@lang("what-is-other")</a> </li>
						
