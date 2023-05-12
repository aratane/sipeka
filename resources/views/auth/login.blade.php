@extends('layouts.app')

@section('content')
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
               
            </div>
        </div>
    </div>
    <div class="absolute z-0 w-full bg-blue-500 dark:hidden min-h-75"></div>
    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out rounded-xl ps ps--active-y main-content  mt-0">
        <section>
            <div class="flex flex-wrap -mx-3">
          <!-- card1 -->
          <div class="container w-80 max-w-full px-3 mb-0 mt-5 sm:w-2/2 sm:flex-none xl:mb-0 xl:w-4/4 ">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3 justify-center">
                  <div class="flex-none w-2/3 max-w-full px-3 ">
                    <div>
                      
                      <h1 class="mb-2 font-bold text-center dark:text-white">SIPEKA</h1>
                      
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>

         
        </div>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="border-0 shadow-xl bg-white dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto w-45">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Sign In</h4>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('login.perform') }}">
                                        @csrf
                                        @method('post')
                                        <div class="flex flex-col mb-3">
                                            <div class="mt-2 mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
                    
                    Email
                  </div>
                                            <input type="email" name="email" class="form-control form-control-lg" value="{{ old('email') ?? 'admin@argon.com' }}" aria-label="Email">
                                            @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <div class="mt-2 mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
                    
                    Password
                  </div>
                                            <input type="password" name="password" class="form-control form-control-lg" aria-label="Password" value="secret" >
                                            @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="remember" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg bg-blue-500 btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-1 text-sm mx-auto">
                                        Forgot you password? Reset your password
                                        <a href="{{ route('reset-password') }}" class="text-primary text-gradient font-weight-bold">here</a>
                                    </p>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Don't have an account?
                                        <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
