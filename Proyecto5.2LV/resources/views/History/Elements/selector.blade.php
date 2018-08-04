<select name="switch" id="switch">
    <option value="menu1">Servicios</option>
    <option value="menu2">Camiones</option>
    <option value="menu3">Dispositivos</option>
</select>
<button id="changeMenu">Ver</button>

<div data-menu="menu1" >
    @include('MonitoringCenter.Elements.list_ended_deliveries',['endedDeliveries'=>$endedDeliveries])
    <br>
</div>
<div data-menu="menu3" class="menu-item">
    @include('MonitoringCenter.Elements.list_devices_working',['activeDevices'=>$activeDevices])
    <br>
</div>
<div data-menu="menu3" class="menu-item">

    @include('MonitoringCenter.Elements.list_devices_not_working',['devicesNotWorking'=>$devicesNotWorking])
    <br>
</div>
<div data-menu="menu2" class="menu-item">
    @include('MonitoringCenter.Elements.list_vehicles_working',['activeDeliveries'=>$activeDeliveries])
</div>
@isset($records)
    @isset($current_delivery)

        <div style="text-align:center">
            <h2 style="text-align:center">DATOS PARA ESTE SERVICIO </h2>

            @include('MonitoringCenter.Elements.show_dash',['records'=>$records])
        </div>
    @endisset
@endisset
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('body').on('click','#changeMenu',function(e){
            e.preventDefault();
            e.stopPropagation();

            var current_menu = $('#switch').val();

            $('div[data-menu]')
            .hide()
            .each(function(){
                if($(this).attr('data-menu') == current_menu)
                {
                    $(this).show();
                }
            })
        })
    });
</script>
