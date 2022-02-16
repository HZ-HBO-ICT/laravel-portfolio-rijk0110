@extends('layout')
@section('head')
    <link rel="stylesheet" href="/css/createstyle.css">
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="container">


               <form method="POST" action="/faq">
                   @csrf
{{--                 <div class="field">--}}
{{--                     <label class="label" for="title">Title</label>--}}

{{--                     <div class="control">--}}
{{--                         <input class="input" type="text" name="title" id="title">--}}
{{--                     </div>--}}
{{--                 </div>--}}

                   <div class="field">
                       <label class="label" for="question">Question</label>

                       <div class="control">
                           <textarea class="textarea" name="question" id="question"></textarea>
                       </div>
                   </div>

                   <div class="field">
                       <label class="label" for="body">Answer</label>

                       <div class="control">
                           <textarea class="textarea" name="answer" id="answer"></textarea>
                       </div>
                   </div>
                   <div class="field is-grouped">
                       <div class="control">
                       <button class="button is-link" type="submit">Submit</button>
                       </div>

                   </div>

               </form>
        </div>
    </div>

@endsection
