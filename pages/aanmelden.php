<div class="row hometext">
    <h2>Aanmeldingsformulier</h2>
</div>
<!-- https://script.google.com/macros/s/AKfycbzOpO3bJwBfW8YXBEtpVVnG9nZN5-RYRbT9zxHhi-CRWTfQ8S0U/exec -->
<div class="row hometext doneerblok">
    <form name='submit-to-google-sheet2' class="col s12">
        <div class="row">
            <div class="input-field col s12 m6">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">Naam</label>
            </div>
            <div class="input-field col s12 m6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Achternaam</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input id="date" type="text" class="datepicker">
                <label for="date">Geboortedatum</label>
            </div>

            <div class="input-field col s12 m6">
                <input id="plaats" class="validate">
                <label for="city">Woonplaats</label>
            </div>
        </div>

        <div class="row">
            <h3>Instrument</h3>
        </div>
        <div class="row">
            <div class="col s12 m6">
                <select>
                <optgroup label="Strijkinstrumenten">
                    <option value="1">Eerste viool</option>
                    <option value="2">Tweede viool</option>
                    <option value="3">Altviool</option>
                    <option value="4">Cello</option>
                    <option value="5">Contrabas</option>
                </optgroup>
                <optgroup label="Blaasinstrumenten">
                    <option value="6">Dwarsfluit</option>
                    <option value="7">Hobo</option>
                    <option value="8">Klarinet</option>
                    <option value="9">Fagot</option>
                    <option value="10">Trompet</option>
                    <option value="11">Fagot</option>
                </optgroup>
                <optgroup label="Slagwerk en anderen">
                    <option value="12">Slagwerk</option>
                    <option value="12">Piano</option>
                </optgroup>
                </select>
                <label>Voorkeursinstrument</label>
            </div>
            <div class="input-field col s12 m6">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Speel je nog andere instrumenten daarnaast? Zo ja, welke?</label>
            </div>
        </div>

        <div class="row">
            <h3>Repetities</h3>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <p>
                    Kun je naar alle repetities komen?
                </p>
                <p>
                    <input name="group1" type="radio" id="test1" />
                    <label for="test1">Ja</label>
                </p>
                <p>
                    <input name="group1" type="radio" id="test2" />
                    <label for="test2">Nee</label>
                </p>
            </div>
            <div class="input-field col s12 m6">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Toelichting</label>
            </div>
        </div>

        <div class="row">
            <h3>Contact informatie</h3>
        </div>

        <div class="row">
            <div class="input-field col s12 m6">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12 m6">
                <input id="telefoon" type="tel" class="validate">
                <label for="telefoon">Telefoonnummer</label>
            </div>
        </div>
        
        <div class="row">
            <!-- <p> -->
                <label>
                    <input id="indeterminate-checkbox" type="checkbox"/>
                    <span>Ik ga akkoord met de <a href="#">privacy voorwaarden</a>.</span>
                </label>
            <!-- </p> -->
        </div>
        <button type='submit'>Send</button>
    </form>

    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbzOpO3bJwBfW8YXBEtpVVnG9nZN5-RYRbT9zxHhi-CRWTfQ8S0U/exec'
        const form = document.forms['submit-to-google-sheet2']

        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => console.log('Success!', response))
                .catch(error => console.error('Error!', error.message))
        })
    </script>