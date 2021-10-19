// Buscador dentro del select
$(document).ready(function() {
    $(".select-municipio").select2();
    $(".select-cargo").select2();
    $(".select-provincia").select2();
    $(".select_antecedente").select2();
});

// Traer municipio
$(document).ready(function() {
    provincia = $('select[name="provincia"]');
    municipio = $('select[name="municipioajax"]');
    var loader = $('#loader');
    loader.hide();
    municipio.attr('disabled', 'disabled')
    municipio.change(function() {
        var id = $(this).val();
        // if(!id){
        //     municipio.attr('disabled','disabled')
        // }
        if (id === "") {
            id = '100000';
        }
        $("#id_municipio").val(id)
    })
    provincia.change(function() {
        var id = $(this).val();
        $("#id_provincia").val(id)
        if (id === "Seleccionar provincia") {
            municipio.attr('disabled', 'disabled')
            municipio.html('')
            $("#id_municipio").val('100000')
            console.log('vacio')
            return;
        }
        if (id) {
            loader.show();
            municipio.attr('disabled', 'disabled')

            $.get('municipios_ajax?IdProvincia=' + id)
                .done(function(data) {
                    var s = '<option value="">Seleccionar municipio</option>';
                    console.log(data);
                    $.each(data.data, function(i, row) {
                        console.log(row);
                        s += '<option value="' + row.IdMunicipio + '">' + row.NombreMunicipio + '</option>'
                    })
                    municipio.removeAttr('disabled')
                    municipio.html(s);
                    loader.hide();
                    if ($("#id_municipio").val() !== '100000') {
                        console.log($("#id_municipio").val() + 'entro')
                        municipio.attr('enabled', 'enabled')
                        $('#municipioajax').val($("#id_municipio").val()).trigger("change")
                    }
                })
        }

    })

    if ($("#id_provincia").val() !== '100000') {
        $('#provincia').val($("#id_provincia").val()).trigger("change")
    }


});

$(document).ready(function() {

    $('body').on('click', '#eliminar', function(e) {
        e.preventDefault();
        var confirmed = confirm('¿Eliminar este registro?');
        var formAction = $("#formeliminar").attr('action');
        var token = $("meta[name='csrf-token']").attr("content");
        if (confirmed === true) {
            var data = { _token: token };
            $.ajax({
                type: "DELETE",
                url: formAction,
                data: data,
                dataType: 'JSON',
                cache: false,
                success: function(msg) {
                    console.log("Se ha realizado el POST con exito " + msg);
                    window.location = msg.ruta;
                }
            });
        } else {

        }
    });
});


function cambiarNull(x) {
    return (x !== null ? x : '')
}
//function para data table responsive
$(document).ready(function() {
    $('#usuario').DataTable({
        responsive: true,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
        }
    });
});


//funcion para add/remove inputs
var i = 0;
$("#dynamic-ar").click(function() {
    ++i;
    $("#dynamicAddRemove").append('<tr><td> <select class="form-control" name="addMoreInputFields[' + i +
        '][material]" >@foreach($materials as $item)<option value="1">  ABRAZADERA DE 3"</option><option value="2">  ALAMBRE DE AMARRE</option><option value="3"> ALAMBRE DE COBRE N 10 AWG</option><option value="4"> ALAMBRE DE COBRE N 12 AWG</option><option value="5"> ALAMBRE DE COBRE N 14 AWG</option><option value="6">  ALAMBRE GALVANIZADO 12</option><option value="7">  ALQUITRAN</option><option value="8"> BARANDA METALIC</option><option value="9">BARNIZ</option><option value="10">  BISAGRA DE 4</option><option value="11">  BISAGRA PARA METAL</option><option value="12">  BOTAGUAS DE CERÁMICA UNA CAÍDA"</option><option value="13">  CAÑERIA DE ALUMINIO 1/2 (BRAZO DE DUCHA)"</option><option value="14">  CAJA DE REGISTRO DE PVC</option><option value="15">  CAJA PARA 1 TERMICO </option><option value="16"> CAJA PARA 3 TERMICOS "</option><option value="17">  CAJA PLÁSTICA CIRCULAR"</option><option value="18">  CAJA PLÁSTICA RECTANGULAR"</option><option value="19"> CAJA SIFONADA PVC C/REJILLA DE PISO"</option><option value="20"> CALAMINA ONDULADA GALV.N°28 PREPINTADA"</option><option value="21">  CALAMINA PLÁSTICA"</option><option value="22">  CANALETA GALV.CORTE 33 NO. 28 Y ACCES."</option><option value="23">  CARTON ALFALTICO </option><option value="24"> CEMENTO BLANCO</option><option value="25">  CEMENTO COLA</option><option value="26">CEMENTO PORTLAND"</option><option value="27">  CERÁMICA NACIONAL</option><option value="28">  CHAPA EXTERIOR "</option><option value="29">  CHICOTILLO 0.40cm italiano"</option><option value="31"> CIELO FALSO pvc Y ACCESORIOS</option><option value="32">  CIELO FALSO YESO - PCV + ACCESORIOS</option><option value="33">  CINTA AISLANTE</option><option value="34"> CLAVOS</option><option value="35">CODO DE 1/2"FGGALV</option><option value="36">CODO PVC DE 1/2</option><option value="37">CODO PVC DE 5/8"</option><option value="38">CODO PVC DESAGÜE 2</option><option value="39">CODO PVC DESAGÜE 3"</option><option value="40">CODO PVC DESAGÜE 4"</option><option value="41">COPLA PVC-1/2</option><option value="42">CORDEL</option><option value="43">ELECTRODOS</option><option value="44">ESQUINERO DE ALUMINIO </option><option value="45">FIERRO CORRUGADO 1/2</option><option value="46">FIERRO CORRUGADO 1/4</option><option value="47">FIERRO CORRUGADO 3/8</option><option value="48">FIERRO CORRUGADO 5/16</option><option value="49">GANCHOS J DE 2,5</option><option value="50">GRIFERIA PARA LAVAMANOS </option><option value="51">GRIFERIA PARA LAVAPLATOS </option><option value="52">GRIFO DE PARED DE 1/2</option><option value="53">IMPERMEABILIZANTE CRIL,SOL Y LLUVIA</option><option value="54">INODORO TANQUE BAJO + ACCESORIOS </option><option value="55">INTERRUPTOR</option><option value="56">LADRILLO 6H 24X15X10</option><option value="57">LADRILLO GAMBOTE</option><option value="58">LAVAMANOS C/PEDESTAL + ACCESORIOS</option><option value="59">LAVANDERIA DE CEMENTO + ACCESORIOS </option><option value="60">LAVAPLATOS DE 1 FOSAY 1 FREDADERO + SOPAPA Y SIFON </option><option value="61">LIJA PARA PARED</option><option value="62">LLAVE DE PASO 1/2"</option><option value="63">LLAVE DE PASO 1/2"PARA DUCHA</option><option value="64">MADERA DE CONSTRUCCIÓN (3 USOS)</option><option value="65">MASA ACRILICA</option><option value="66">MASA CORRIDA</option><option value="67">MEMBRANA AISLANTE BAJO PISO FLOTANTE </option><option value="68">MEMBRANA ASFALTICA CON ALUMINIO </option><option value="69">NIPLE PVC DE 1/2</option><option value="70">PANEL LED 24 W EMPOTRABLE</option><option value="71">PEGAMENTO PARA LADRILLO </option><option value="72">PEGAMENTO PARA PVC</option><option value="73">PERFIL COSTANERA GALV.50*25*10-2MM(6M)</option><option value="74">PERFIL COSTANERA GALV.80*40*15-2MM(6M)</option><option vlue="75">PINTURA ANTICORROSIVA</option><option value="76">PINTURA LATEX (BALDE 18 LT)</option><option value="77">PINTURA LÁTEX(ENGOMADA-BALDE 18 LT)</option><option value="78">PISO FLOTANTE HDF 8MM + ACCESORIOS</option><option value="79">PLANTIN </option><option value="80">PLETINA DE 1/8"X 3/4"-(BAJANTE)</option><option value="81">POLIETILENO 200 MICRONES</option><option value="82">PUERTA MIXTA METAL Y MADERA 1X2,10 INC/MARCO</option><option value="83">PUERTA TABLERO CON MARCO DE MADERA SEMI DURA</option><option value="84">PUERTA TABLERO CON MARCO DE MADERA SEMI DURA</option><option value="85">REJILLA DE PISO METÁLICA fv</option><option value="86">REJILLA DE VENTILACIÓN </option><option value="87">REJILLA DE VENTILACIÓN 20X20</option><option value="88">SELLARROSCA</option><option value="89">SELLADOR DE PARED </option><option value="90">SIFÓN DE PVC</option><option value="91">SIFÓN DE LAVANDERIA</option><option value="92">SILICONA</option><option value="93">SOCKET DE PORCELANA</option><option value="94">TANQUE EPTICO DE PVC 900 Lt.</option><option value="95">TANQUE PLÁSTICO DE AGUA 450 LITROS C/ACCESORIOS</option><option value="96">TABLERO ELÉCTRICO 1 CIRCUITO(DUCHA)</option><option value="97">TABLERO ELÉCTRICO 2 CIRCUITOS</option><option value="98">TEEPVC D=1/2"tupy</option><option value="99">TEE PVC DESAGÜE 2"</option><option value="100">TEE PVC DESAGÜE 4"</option><option value="101">TEE PVC DESAGÜE 4"A 2"</option><option value="102">TEFLON 3/4"</option><option value="103">TÉRMICO DE 20 AMP gacia</option><option value="104">TERMICO DE 25 AMP gacia</option><option value="105">TERMICO DE 30 AMP gacia</option><option value="106">TOPE DE PUERTA </option><option value="107">TOMA CORRIENTE DOBLE</option><option value="108">TORNILLO Y RAMPLU DE 6X2MM EL 100PZS</option><option value="109">TUBERIA PVC 1 /2"(L=6M)</option><option value="110">TUBO PVC 5/8"(L=3M)</option><option value="111">TUBO PVC DE DESAGÜE 2" (L=4M)</option><option value="112">TUBO PVC DE DESAGÜE 3"(L=4M)</option><option value="113">TUBO PVC DE DESAGÜE 4 L=4M).</option><option value="114">UNION UNIVERSAL 1/2"</option><option value="115">VENTANA METÁLICA ANGULAR (0.60X1.10) 1"X1/8"+</option><option value="116">VENTANA METÁLICA ANGULAR(1.50X1.10) 1"X1/8"+</option><option value="117">VENTANA DE ALUMINIO LINEA 20 C/VIDRIO 4MM +</option><option value="118">VIDRIO DOBLE</option><option value="119">YEE PVC DESAGÜE 4"A 2"</option><option value="120">YESO</option><option value="121">ZÓCALO (PISO FLOTANTE) Y TORNILLO-RAMPUG</option>@endforeach </select></td>" placeholder="Enter subject" class="form-control" /></td><td><input type="text" name="addMoreInputFields[' + i +
        '][cantidad]" placeholder="Enter cantidad" class="form-control" /></td><td><button type="button" class="btn btn-sm btn-primary mb-1 remove-input-field">ELIMINAR</button></td></tr>'
    );
});
$(document).on('click', '.remove-input-field', function() {
    $(this).parents('tr').remove();
});
//multiples inputs add o remove
var i = 0;
$("#dynamic-ar").click(function() {
    ++i;
    $("#addremove").append('<tr><td> <select class="form-control" name="adicionar[' + i +
        '][herramienta]" >@foreach($herramientas as $item)<option value="1">Escritorio de madera</option><option value="2">Silla de plástico</option><option value="3">Estantes metálico tipo mecano</option><option value="4">Pizarras Acrílicas</option><option value="5">Computadora portatil </option><option value="6">Flash Memory 8GB</option><option value="7">Impresora de tinta continua - multiuso  </option><option value="8">GPS </option><option value="9">Data Show</option><option value="10">Afiche s/mejoramiento vivienda</option><option value="11">Banner Educativo segun modelo proporcionado por la AEVIVIENDA</option><option value="12">INSUMOS DE COLOCADO DE PLACA</option><option value="13">Placa de numeracion de viviendas</option><option value="14">Formularios Impresos control de almacenes</option><option value="15">Maletin Almaceneros (Libros de actas, calculadora, tampos, sellos, engrampadoras, etc)</option><option value="16">Maqueta Vivienda tipo</option><option value="17">Carpetas Familiares Plasticas </option><option value="18">Impresión de tarjetas familiares</otion><option value="19">Tablero de anotaciones </option><option value="20">Papel sabana tamaño resma</option><option value="21">Cuadernos de actas</option><option value="22">Papel Bond tamaño oficio </option><option value="23">Clips</option><option value="24">Perforadora</option><option value="25">Engrampadora</option><option value="26">Cinta scotch transparente</option><option value="27">Post-it</option><option value="28">Folders de plástico</option><option value="29">Cinta masquink</option><option value="30">Cuaderno de 30 hojas</option><option value="31">Grampas</option><option value="32">Bolígrafo</option><option value="33">Goma de borrar</option><option value="34">Lápiz negro</option><option value="35">Tajador</option><option value="36">Marcador de agua</option><option value="37">Cuaderno de 100 hojas tamaño carta</option><option value="38">Marcador indeleble</option><option value="39">Portadocumentos de plástico tamaño oficio</option><option value="40">Papel carbónico</option><option value="41">Archivadres de palanca</option><option value="42">Papel Bond tamaño carta </option><option value="43">Combillo 2 libras</option><option value="44">Lápiz de carpintero</option><option value="45">Tenaza</option><option value="46">Llave Stilson</option><option value="47">Combo 5 libras</option><option value="48">Manguera transparente de nivel   3/8</option><option value="49">Destornillador punta estrella</option><option value="50">Pata de cabra</option><option value="51">Guantes de seguridad (especial)</option><option value="52">Escuadra 0.40 x 0.60</option><option value="53">Alicate</option><option value="54">Martillo</option><option value="55">Destornillador punta plana</option><option value="56">Pico y mango</option><option value="57">Estilete</option><option value="58">Flexo 10m de primera</option><option value="59">Badilejos</option><option value="60">Nivel de mano de 30 cm</option><option value="61">BROCHA 3"</option><option value="62">Plancha</option><option value="63">Taladro</option><option value="64">Frotacho 5x20</option><option value="65">Balde plástico 20 lt</option><option value="66">Palas</option><option value="67">RODILLO ESPUMA</option><option value="68">Plomada   300 gr.</option><option value="69">Pinza de corte lateral</option><option value="70">Hilo tanza # 0.70</option><option value="71">Barreta de 1.50 metros</option><option value="72">Tester multímetro</option><option value="73">Regla metálica 20 x 50 mm</option><option value="74">Llave perico</option><option value="75">Hojas para sierra mecánica</option><option value="76">Cepillo de acero</option><option value="77">Llave universal para tubos</option><option value="78">Serrucho para madera</option><option value="79">Pinza de electricista</option><option value="80">Sierra metálica</option><option value="81">Huincha de 50 mts tela</option><option value="82">Tarrajas de PVC de 1/2"</option><option value="83">Flexo  10m</option><option value="84">Cinta masquink</option><option value="85">Lápiz negro</option><option value="86">Marcador de agua</option><opton value="87">Tajador</option><option value="88">Papel sabana tamaño resma</option><option value="89">Papelografo</option><option value="90">Manual Capacitacion</option><option value="91">Bolígrafo</option><option value="92">Cuaderno de 30 hojas</option><option value="93">Goma de borrar</option><option value="94">Manual Capacitacion</option><option value="95">Bolígrafo</option><option value="96">Cuaderno de 30 hojas</option><option value="97">Goma de borrar</option><option value="98">Cinta masquink</option><option value="99">Lápiz negro</option><option value="100">Marcador de agua</option><option value="101">Tajador</option><option value="102">Papel sabana tamaño resma</option><option value="103">Goma de borrar</option><option value="104">Cinta masquink</option><option value="105">Lápiz negro</option><option value="106">Tajador</option><option value="107">Marcador de agua</option><option value="108">Portadocumentos de plástico tamaño oficio</option><option value="109">Papel sabana tamaño resma</option><option alue="110">Tablero de anotaciones </option><option value="111">Papelografo</option><option value="112">Manual Capacitacion</option><option value="113">Bolígrafo</option><option value="114">Cuaderno de 100 hojas tamaño carta</option><option value="115">Constructor Especialista p/instalación materiales prefabricados </option><option value="116">Constructor Especialista p/instalación sanitaria y agua potable </option><option value="117">Constructor Especialista p/instalación eléctrica </option><option value="118">Técnico Constructor - Albañil apoyo social </option><option value="119">Constructores Albañiles </option><option value="120">Almacenero </option><option value="121">Educador Social </option><option value="122">Técnico Operativo de Área </option><option value="123">Gorra </option><option value="124">Botas </option><option value="125">Guantes</option><option value="126">Overol</option><option value="127">Casco</option><option value="128">Chaleco de identificación</option><option value="129">Gasolina para amioneta(s)</option><option value="130">Gasolina para motocicleta(s)</option><option value="131">Cambio de aceite de todos los vehículos</option><option value="132">Alquiler de Oficina</option><option value="133">Alquiler de Almacenes</option><option value="134">Evaluación de medio termino</option><option value="135">Camioneta </option><option value="136">Motocicleta </option><option value="137">Fotocopias</option>@endforeach </select></td>" placeholder="Enter subject" class="form-control" /></td><td><input type="text" name="adicionar[' + i +
        '][cantidad]" placeholder="Enter cantidad" class="form-control" /></td><td><button type="button" class="btn btn-sm btn-primary mb-1 remove-input-field">Eliminar</button></td></tr>'
    );
});
$(document).on('click', '.remove-input-field', function() {
    $(this).parents('tr').remove();
});