@extends('layouts.layout')
@section('content')
<div id="page">
    <div>
        <h1>
            <div class="flex">
                <div class="route-number w-20 text-center">5</div>
                <div class="px-3">Central Bus Station - Airport</div>
            </div>
        </h1>
    </div>

    <div class="timetable pl-20">
        <h2 id="timetable">Timetable</h2>

        <table class="bordered-table table-fixed w-full">
            <thead>
                <tr class="uppercase">
                <th class="w-1/12 text-left">Hour</th>
                <th class="w-2/12 text-left">Week days</th>
                <th class="w-2/12 text-left">Satuday</th>
                <th class="w-2/12 text-left">Sunday</th>
                </tr>
            </thead>
            <tbody>
                <tr class="uppercase">
                    <td>04</td>
                    <td>05,15,25,45,55</td>
                    <td>05,35</td>
                    <td>05,35</td>
                </tr>
                <tr class="uppercase">
                    <td>05</td>
                    <td>05,15,25,45,55</td>
                    <td>05,35</td>
                    <td>05,35</td>
                </tr>
                <tr class="uppercase">
                    <td>06</td>
                    <td>05,15,25,45,55</td>
                    <td>05,35</td>
                    <td>05,35</td>
                </tr>
                <tr class="uppercase">
                    <td>07</td>
                    <td>05,15,25,45,55</td>
                    <td>05,35</td>
                    <td>05,35</td>
                </tr>
                <tr class="uppercase">
                    <td>08</td>
                    <td>05,15,25,45,55</td>
                    <td>05,35</td>
                    <td>05,35</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="stops pl-20">
        <h2 id="stops">Stops</h2>
        <div class="flex">
        <div class="w-1/2">
            <h3>Direction A</h3>
            <ol class="generic-list">
                <li>Central Bus Station</li>
                <li>Roman Road</li>
                <li>Westfield</li>
                <li>Airport</li>
            </ol>
        </div>
        <div class="w-1/2">
            <h3>Direction B</h3>
            <ol class="generic-list" reversed>
                <li>Central Bus Station</li>
                <li>Roman Road</li>
                <li>Westfield</li>
                <li>Airport</li>
            </ol>
        </div>
    </div>
    </div>
</div>



@endsection
