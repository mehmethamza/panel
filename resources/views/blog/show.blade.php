
@php
@dd($blog->get_urls());
  $url = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getURLFromRouteNameTranslated('en',"routes.".request()->route()->getName(),['blog'=>"service"]);
       print_r($url);
    @endphp


<h1>{{$blog->name}}</h1>
