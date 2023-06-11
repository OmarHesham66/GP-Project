<html>
@include('layouts.bootstrap')

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Weight</th>
                <th scope="col">Height</th>
                <th scope="col">age</th>
                <th scope="col">bodyfat</th>
                <th scope="col">gender</th>
                <th scope="col">allergy</th>
                <th scope="col">goal</th>
                <th scope="col">Bmr</th>
                <th scope="col">Bmi</th>
                <th scope="col">Your calories</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>{{$client->weight}}</th>
                <th>{{$client->height}}</th>
                <th>{{$client->age}}</th>
                <th>{{$client->body_fat}}</th>
                <th>@if($client->gender==1) Male @else Female @endif</th>
                <th>{{$client->allergy}}</th>
                <th>{{$client->goal}}</th>
                {{-- @endforeach --}}
                <th>{{$client->bmr}}</th>
                <th>{{$client->bmi}}</th>
                <th>{{$client->my_real_calories}}</th>
                <td>
                    <a class="btn btn-primary" href="" role="button">Edit</a>
                    <a class="btn btn-primary" href="" role="button">Delet</a>
                </td>
            </tr>

        </tbody>
    </table>
    <h1> Macronutrients </h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Protein</th>
                <th scope="col">Carbs</th>
                <th scope="col">Fats</th>
            </tr>
        </thead>
        <tbody>
            <th> {{$client->protein}} g</th>
            <th> {{$client->carbs}} g</th>
            <th> {{$client->fats}} g</th>
        </tbody>
    </table>
</body>

</html>
