@php $locale = session()->get('locale'); @endphp
							
							@if(isset($languages))
								@foreach($languages as $lang)	
									<a class="dropdown-item" href="{{route('LangChange', 'lang_key='.strtolower($lang->lang_code) )}}">{{$lang->name}}</a>
								@endforeach
							@endif
