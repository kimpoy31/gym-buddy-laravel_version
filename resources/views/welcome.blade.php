@extends('layout')
@section("title", "Home Page")
@section('content')

    <style>
        .flexDirection{
            display: flex;
            flex-direction: row
        }

        .formContainer{
            width: 25%;
            max-width: 380px;
        }

        .listContainer{
            width: 75%
        }

        @media (max-width:768px){
            .flexDirection{
                flex-direction: column-reverse
            }

            .formContainer{
                width: 100%
            }

            .listContainer{
                width: 100%
            }
        }
    </style>

    <div class="container-xxl p-4">
        <div class="flexDirection gap-4">
            <div class="listContainer">
                @include('components.workoutList')
            </div>
            <div class="formContainer" style="min-width:240px;">
                @include('components.addWorkout')
            </div>
        </div>      
    </div>
@endsection