@extends('layouts.app')
@section('title')
Register en Devsta
@endsection
@section('content')
    <div class="md:flex md:justify-center">
        <div class="md:w-4/12">
            <p>Imagen</p>
        </div>
        <div class="md:w-4/12 p-5 rounded-md shadow-md bg-white">
            <form>
                <div class="mb-5">
                    <label for="name" class="md-2 block uppercase text-gray-500 font-semibold">Nombre</label>
                    <input class="w-full p-3 border rounded-lg"
                           id="name"
                           name="name"
                           type="text"
                    />
                </div>
                <div class="mb-5">
                    <label for="username" class="md-2 block uppercase text-gray-500 font-semibold">Username</label>
                    <input class="w-full p-3 border rounded-lg"
                           id="username"
                           name="username"
                           type="text"
                    />
                </div>
                <div class="mb-5">
                    <label for="email" class="md-2 block uppercase text-gray-500 font-semibold">Email</label>
                    <input class="w-full p-3 border rounded-lg"
                           id="email"
                           name="email"
                           type="email"
                    />
                </div>
                <div class="mb-5">
                    <label for="password" class="md-2 block uppercase text-gray-500 font-semibold">Password</label>
                    <input class="w-full p-3 border rounded-lg"
                           id="password"
                           name="password"
                           type="text"
                    />
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="md-2 block uppercase text-gray-500 font-semibold">Password
                        Confirm</label>
                    <input class="w-full p-3 border rounded-lg"
                           id="password_confirmation"
                           name="password_confirmation"
                           type="text"
                    />
                </div>
                <input class="w-full p-3 border rounded-lg bg-gradient-to-bl text-white bg-blue-400"
                       id="send"
                       name="send"
                       type="submit"
                       value="Create Account"
                />
            </form>
        </div>
    </div>
@endsection
