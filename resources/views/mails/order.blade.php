<h1>Оформление заявки</h1>
<p><span class="font-bold">Имя,Фамилия</span>{{$details['name'].' '. $details['surname']}}</p>
<p><span class="font-bold">Дата:</span>{{$details['date']}}</p>
<p><span class="font-bold">Email:</span>{{$details['email']}}</p>
<p><span class="font-bold">Количество взрослых:</span>{{$details['adultsCount']}}</p>
<p><span class="font-bold">Количество детей:</span>{{$details['childCount']}}</p>
<p><span class="font-bold">Телефон:</span>{{$details['phone']}}</p>
<p><span class="font-bold">Туры:</span></p>
<div class="p-2">
    @foreach($details['tours'] as $d)
        <p>{{$d}}</p>
    @endforeach
</div>
<p><span class="font-bold">Транспорт:</span>{{$details['transport']}}</p>
<p><span class="font-bold">Текс:</span></p>
<p>{{$details['note']}}</p>

