@php $locale = session()->get('locale'); @endphp
@php $languagesArr =  [ array('name'=>'English', 'lang_code'=>'en'), array('name'=>'English', 'lang_code'=>'en') ]; @endphp

@foreach($languagesArr as $lang)	
	<a class="dropdown-item" href="{{route('LangChange', 'lang_key='.strtolower($lang['lang_code']) )}}">{{$lang['name']}}</a>
@endforeach

						


<!--Other links-->

<li><a href="{{url(app()->getLocale())}}">Home</a></li>
<li><a href="{{url(app()->getLocale(), 'what-is-other')}}">What is other</a></li>
