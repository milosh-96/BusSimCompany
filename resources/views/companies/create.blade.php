<x-app-layout>
<div id="page">

    <div class="flex">
        <div class="w-2/3 p-3">
            <form action="{{route('companies.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" name="name" class="p-3 w-full border border-gray-200 rounded-md text-2xl" placeholder="Your Company Name">
                </div>
                <div>
                    <h3>Colors</h3>
                    <div class="w-full">
                        <div class="flex">
                            <div class="w-1/2">
                                <strong>Primary: </strong>
                                <input type="color" name="primary_color">
                            </div>
                            <div class="w-1/2">
                                <strong>Secondary: </strong>
                                <input type="color" name="secondary_color">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="w-full">
                    <button class="w-full submit-button" type="submit">Create</button>
                </div>
            </form>
        </div>
        <div class="w-1/3 p-3">
            <h3>Tips</h3>
            <ul>
                <li>Have Fun!</li>
            </ul>
        </div>
    </div>
</div>
</x-app-layout>
