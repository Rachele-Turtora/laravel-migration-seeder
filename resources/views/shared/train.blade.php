<div class="card">
    <h3>{{$train['agency']}}</h3>
    <div class="d-flex flex-wrap">
        <div class="m-3">
            <p><strong>Stazione di partenza: </strong>{{$train['departure_station']}}</p>
            <p><strong>Orario di partenza: </strong>{{$train['departure_time']}}</p>
        </div>
        <div class="m-3">
            <p><strong>Stazione di arrivo: </strong>{{$train['arrival_station']}}</p>
            <p><strong>Orario di arrivo: </strong>{{$train['arrival_time']}}</p>
        </div>
    </div>
</div>