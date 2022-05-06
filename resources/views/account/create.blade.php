@extends('layout.templateIndex')
@section('shoppingTitle03')
會員新增頁
@endsection
@section('shoppingCart03')
<link rel="stylesheet" href="/css/shoppingCart.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
@endsection
<body>
@section('shoppingMain03')
<section id="shopping3">
<div class="container-lg rounded">
<h1 class="fw-bold mb-5">
    <div class="row justify-content-between">
        <div class="col-4">
            會員新增頁
        </div>
        <div class="col-2">
        </div>
    </div>
</h1>
  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />
<div class="comment_board">
    <form method="POST" action="/account/store" >
        @csrf
        <div>
            <h3>
                請在此新增
            </h3>
        </div>
       <div class="mb-3 mt-3">
            <label for="name" :value="__('Name')">使用者名稱</label>
            <input id="name" type="text" name="name" :value="old('name')" required autofocus>
       </div>
       <div class="mb-3 mt-3">
            <label for="email" :value="__('Email')">使用者信箱</label>
            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="password" :value="__('Password')" >使用者密碼</label>
            <input id="password" class="block mt-1 w-full"
            type="password"
            name="password"
            required autocomplete="new-password">
        </div>
        <div class="mb-3 mt-3">
            <label for="password_confirmation" :value="__('Confirm Password')" >使用者密碼</label>
            <input id="password_confirmation" class="block mt-1 w-full"
            type="password"
            name="password_confirmation" required>
        </div>
        <div>
            <button class="btn btn-primary"  type="submit">確認密碼</button>
        </div>
    </form>
     <!-- Validation Errors -->
     {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" />

     <form method="POST" action="{{ route('register') }}">
         @csrf

         <!-- Name -->
         <div>
             <x-label for="name" :value="__('Name')" />

             <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
         </div>

         <!-- Email Address -->
         <div class="mt-4">
             <x-label for="email" :value="__('Email')" />

             <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
         </div>

         <!-- Password -->
         <div class="mt-4">
             <x-label for="password" :value="__('Password')" />

             <x-input id="password" class="block mt-1 w-full"
                             type="password"
                             name="password"
                             required autocomplete="new-password" />
         </div>

         <!-- Confirm Password -->
         <div class="mt-4">
             <x-label for="password_confirmation" :value="__('Confirm Password')" />

             <x-input id="password_confirmation" class="block mt-1 w-full"
                             type="password"
                             name="password_confirmation" required />
         </div>

         <div class="flex items-center justify-end mt-4">
             <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                 {{ __('Already registered?') }}
             </a>

             <x-button class="ml-4">
                 {{ __('Register') }}
             </x-button>
         </div>
     </form> --}}
</div>
</div>
</section>
@endsection
