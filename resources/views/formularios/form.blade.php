@if(count($errors)>0)
    <div class="alert alert-danger shadow-sm mb-4">
        <i class="fas fa-exclamation-triangle mr-2"></i> ¡Por favor, llene los campos correctamente!
    </div>
@endif


<div class="instruccion alert alert-info p-3 text-right">
    <div>
        <div><b>INSTRUCCIONES:</b></div>
        Para efectuar un registro exitoso, sea tan amable de verificar que sus datos 
        se encuentren en <b>mayúsculas, sin acentos y que todos los campos solicitados sean 
        contestados</b>.
    </div>
</div>

<section class="Global p-3">
    @if(session('mensaje'))
        <div class="alert alert-warning shadow-sm">
            {{ session('mensaje') }}
        </div>
    @endif

    <div class="row">
        <div class="form-group col-12 col-md-4">
            <label for="Nombre" class="font-weight-bold">Nombre(s)</label>
            <input type="text" name="Nombre" class="form-control" 
                value="{{isset($emplead1->Nombre)?$emplead1->Nombre:old('Nombre')}}" placeholder="Ej. JUAN">
        </div>

        <div class="form-group col-12 col-md-4">
            <label for="ApellidoPaterno" class="font-weight-bold">Apellido Paterno</label>
            <input type="text" name="ApellidoPaterno" class="form-control"
                value="{{isset($emplead1->ApellidoPaterno)?$emplead1->ApellidoPaterno:old('ApellidoPaterno')}}">
        </div>
        <div class="form-group col-12 col-md-4">
            <label for="ApellidoMaterno" class="font-weight-bold">Apellido Materno</label>
            <input type="text" name="ApellidoMaterno" class="form-control"
                value="{{isset($emplead1->ApellidoMaterno)?$emplead1->ApellidoMaterno:old('ApellidoMaterno')}}">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-12 col-md-6">
            <label for="Profesion" class="font-weight-bold">Profesión</label>
            <input type="text" name="Profesion" class="form-control"
                value="{{isset($emplead1->Profesion)?$emplead1->Profesion:old('Profesion')}}" placeholder="Ej. Médico Cirujano">
        </div>

        <div class="form-group col-12 col-md-6">
            <label for="Institucion" class="font-weight-bold">Institución de procedencia</label>
            <select name="Institucion" id="instiPro" class="form-control dynamic" data-dependent="unidad">
                <option value="">Escoja uno</option>
                @foreach($institucion_list as $instiPro)
                    <option value="{{ $instiPro->idInsti }}"
                        {{ old('Institucion', $emplead1->Institucion ?? '') == $instiPro->idInsti ? 'selected' : '' }}>
                        {{$instiPro->instiPro}}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-12">
            <label for="UnidadMedica" class="font-weight-bold">Unidad médica</label>
            <select name="UnidadMedica" id="unidad" class="form-control">
                <option value="">Escoja uno</option>
                @if(isset($unidades_list))
                    @foreach($unidades_list as $unidad)
                        <option value="{{ $unidad->id }}"
                            {{ old('UnidadMedica', $emplead1->UnidadMedica ?? '') == $unidad->id ? 'selected' : '' }}>
                            {{ $unidad->unidad }}
                        </option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>

    <div class="row">
            <div class="form-group col-12 col-md-4">
                <label class="font-weight-bold">Estado</label>
                <select id="EstadoProcedencia" name="EstadoProcedencia" class="form-control"></select>
            </div>

            <div class="form-group col-12 col-md-4">
                <label class="font-weight-bold">País</label>
                <select id="slcPais" name="Pais" class="form-control w-100">
                    <option value="">Seleccione uno</option>
                </select>
            </div>

            <div class="form-group col-12 col-md-4">
                <label class="font-weight-bold">Alcaldía</label>
                <select id="slcAlcaldia" name="Alcaldia" class="form-control">
                    <option value="N/A">Seleccione uno</option>
                </select>
            </div>
    </div>

    <div class="row">
        <div class="form-group col-12 col-md-6">
            <label for="Edad" class="font-weight-bold">Edad</label>
            <input type="number" name="Edad" class="form-control"
                value="{{isset($emplead1->Edad)?$emplead1->Edad:old('Edad')}}">
        </div>

        <div class="form-group col-12 col-md-6">
            <label for="inputSexo" class="font-weight-bold">Sexo:</label>
            <input name="Sexo" id="inputSexo" list="sexo" class="form-control" placeholder="Selecciona"
                value="{{isset($emplead1->Sexo)?$emplead1->Sexo:old('Sexo')}}">
            <datalist id="sexo">
                <option value="Hombre"><option value="Mujer"><option value="Otro">
            </datalist>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-12 col-md-4">
            <label for="Numero" class="font-weight-bold">Número telefónico</label>
            <input type="text" name="Numero" class="form-control"
                value="{{isset($emplead1->Numero)?$emplead1->Numero:old('Numero')}}">
        </div>

        <div class="form-group col-12 col-md-8">
            <label class="font-weight-bold d-block">Eres:</label>
            <select name="Eres" class="form-control">
                <option value="">Elije una opción</option>
                <option value="GC">GESTOR DE CALIDAD</option>
                <option value="MS">MONITOR DE LA SALUD</option>
                <option value="PA">PERSONAL DE ADMISIÓN</option>
                <option value="PAC">PERSONAL DE ARCHIVO CLÍNICO</option>
                <option value="PS">PERSONAL DE SEGURIDAD</option>
                <option value="OTRO">OTRO</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-12 col-md-6">
            <label for="email" class="font-weight-bold">Correo electrónico</label>
            <input type="email" name="email" id="email" class="form-control"
                value="{{isset($emplead1->email)?$emplead1->email:''}}">
        </div>
        
        <div class="form-group col-12 col-md-6">
            <label for="psswd" class="font-weight-bold">Contraseña</label>
            <input type="password" name="password" class="form-control" placeholder="Mínimo 8 caracteres">
        </div>
    </div>

    <hr class="my-4">

    <div class="botones-container d-flex flex-column flex-md-row justify-content-md-between align-items-center mx-md-5">
        <a href="{{url('/content/')}}" class="btn btn-lg btn-outline-secondary shadow-sm px-5 mx-2 mb-3 mb-md-0 w-100 w-md-auto">
            Regresar
        </a>
        <button type="submit" class="btn btn-lg btn-success px-5 shadow-sm border-0 w-100 w-md-auto mx-2">
            {{$modo}} registro
        </button>
    </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</section>

<script>
    
    const estadoGuardado = "{{ old('EstadoProcedencia', $emplead1->EstadoProcedencia ?? '') }}";
    const paisGuardado = "{{ old('Pais', $emplead1->Pais ?? '') }}"; 
    const alcaldiaGuardada = "{{ old('Alcaldia', $emplead1->Alcaldia ?? 'N/A') }}";

    
    const estadosLista = [
        "Seleccione uno...", "Aguascalientes", "Baja California", "Baja California Sur", "Campeche", "Chiapas",
        "Chihuahua", "Ciudad de México", "Coahuila", "Colima", "Durango", "Estado de México", "Guanajuato",
        "Guerrero", "Hidalgo", "Jalisco", "Michoacán", "Morelos", "Nayarit", "Nuevo León", "Oaxaca", "Puebla",
        "Querétaro", "Quintana Roo", "San Luis Potosí", "Sinaloa", "Sonora", "Tabasco", "Tamaulipas",
        "Tlaxcala", "Veracruz", "Yucatán", "Zacatecas", "Soy extranjero"
    ];

    const alcaldiasCDMX = [
        "Álvaro Obregón", "Azcapotzalco", "Benito Juárez", "Coyoacán", "Cuajimalpa de Morelos", 
        "Cuauhtémoc", "Gustavo A. Madero", "Iztacalco", "Iztapalapa", "Magdalena Contreras", 
        "Miguel Hidalgo", "Milpa Alta", "Tláhuac", "Tlalpan", "Venustiano Carranza", "Xochimilco"
    ];

    const selectEdo = document.getElementById('EstadoProcedencia');
    const selectPais = document.getElementById('slcPais');
    const selectAlc = document.getElementById('slcAlcaldia');

    function cargarEstados() {
        selectEdo.innerHTML = "";
        estadosLista.forEach(edo => {
            let opt = document.createElement('option');
            opt.value = edo;
            opt.text = edo;
            if (edo === estadoGuardado) opt.selected = true;
            selectEdo.add(opt);
        });
    }

   
    function gestionarPaises() {
        const edo = selectEdo.value;

        if (edo === "Soy extranjero") {
            // Quitamos la clase de los options, no es necesaria ahí
            selectPais.innerHTML = '<option value="">Cargando países...</option>';
            
            fetch("https://query.data.world/s/m7hmng2elmrbpffknj26ohjz2zcng3?dws=00000")
                .then(res => res.json())
                .then(data => {
                    selectPais.innerHTML = '<option value="">Seleccione país...</option>';
                    
                    data.forEach(p => {
                        let opt = document.createElement('option');
                        opt.value = p.abbreviation;
                        opt.text = p.country;
                        
                        if (paisGuardado && p.abbreviation === paisGuardado) {
                            opt.selected = true;
                        }
                        selectPais.add(opt);
                    });
                })
                .catch(err => {
                    selectPais.innerHTML = '<option value="">Error al cargar países</option>';
                });
        } else if (edo === "" || edo === "Seleccione uno...") {
            selectPais.innerHTML = '<option value="">Seleccione uno</option>';
        } else {
            // Asegúrate de que México sea la opción por defecto y única si no es extranjero
            selectPais.innerHTML = '<option value="MX" selected>México</option>';
        }
    }

    function gestionarAlcaldias() {
        selectAlc.innerHTML = "";
        const edo = selectEdo.value;

        if (edo === "Ciudad de México") {
            // Si es CDMX, permitimos elegir
            let placeholder = document.createElement('option');
            placeholder.value = "";
            placeholder.text = "Seleccione alcaldía";
            selectAlc.add(placeholder);

            alcaldiasCDMX.forEach(alc => {
                let opt = document.createElement('option');
                const nombreMayus = alc.toUpperCase();
                opt.value = nombreMayus;
                opt.text = nombreMayus;
                
                // Si estamos editando y coincide, lo seleccionamos
                if (alcaldiaGuardada && nombreMayus === alcaldiaGuardada.toUpperCase()) {
                    opt.selected = true;
                }
                selectAlc.add(opt);
            });
            selectAlc.disabled = false;

        } else if (edo === "" || edo === "Seleccione uno") {
            // Si no ha seleccionado estado, pedimos que lo haga
            let opt = document.createElement('option');
            opt.value = "";
            opt.text = "Seleccione uno";
            selectAlc.add(opt);
            selectAlc.disabled = true;

        } else {
            // Si es cualquier otro estado o Extranjero, ponemos NO APLICA
            let opt = document.createElement('option');
            opt.value = "NO APLICA";
            opt.text = "NO APLICA";
            opt.selected = true; 
            selectAlc.add(opt);
            selectAlc.disabled = false; // O true, según prefieras si quieres que el usuario lo vea pero no lo mueva
        }
    }

    selectEdo.addEventListener('change', () => {
        gestionarPaises();
        gestionarAlcaldias();
    });

    document.addEventListener('DOMContentLoaded', () => {
        cargarEstados();
        
        gestionarPaises();
        gestionarAlcaldias();
    });
</script>