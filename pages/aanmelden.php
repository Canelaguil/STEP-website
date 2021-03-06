<div class="row hometext">
    <h2>Aanmeldingsformulier</h2>
</div>
<!-- https://script.google.com/macros/s/AKfycbzOpO3bJwBfW8YXBEtpVVnG9nZN5-RYRbT9zxHhi-CRWTfQ8S0U/exec -->
<div class="row hometext formblok">
    <form name='submit-to-google-sheet2' class="col s12">
        <div class="row">
            <div class="input-field col s12 m6">
                <input name="first_name" id="first_name" type="text" class="validate" required>
                <label for="first_name">Naam *</label>
            </div>
            <div class="input-field col s12 m6">
                <input name="last_name" id="last_name" type="text" class="validate" required>
                <label for="last_name">Achternaam *</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input name="birth_year" id="year" type="number" required>
                <label for="year">Geboortejaar *</label>
            </div>

            <div class="input-field col s12 m6">
                <input name="city" id="city" type="text" required>
                <label for="city">Woonplaats *</label>
            </div>
        </div>

        <div class="row">
            <h3>Instrument</h3>
        </div>
        <div class="row">
            <div class="col s12 m6 input-field">
                <select name="instrument" required>
                <option value="" selected disabled hidden>Voorkeursinstrument *</option>
                <optgroup label="Strijkinstrumenten">
                    <option value="Eerste viool">Eerste viool</option>
                    <option value="Tweede viool">Tweede viool</option>
                    <option value="Altviool">Altviool</option>
                    <option value="Cello">Cello</option>
                    <option value="Contrabas">Contrabas</option>
                </optgroup>
                <optgroup label="Blaasinstrumenten">
                    <option value="Dwarsfluit">Dwarsfluit</option>
                    <option value="Hobo">Hobo</option>
                    <option value="Klarinet">Klarinet</option>
                    <option value="Fagot">Fagot</option>
                    <option value="Trompet">Trompet</option>
                    <option value="Hoorn">Hoorn</option>
                </optgroup>
                <optgroup label="Slagwerk en anderen">
                    <option value="Slagwerk">Slagwerk</option>
                    <option value="Piano">Piano</option>
                </optgroup>
                </select>
            </div>
            <div class="input-field col s12 m6">
                <textarea id="instrumenten" class="materialize-textarea"></textarea>
                <label class="active" for="instrumenten">Speel je nog andere instrumenten daarnaast? Zo ja, welke?</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input name="speelvaring" id="ervaring" type="number" required>
                <label for="ervaring">Hoe lang speel je al? *</label>
            </div>

            <div class="input-field col s12 m6">
                <input name="orkesten" id="orkesten" type="text" required>
                <label for="orkesten">Orkesten *</label>
            </div>
        </div>

        <div class="row">
            <h3>Repetities</h3>
            <h5 class="privacytekst">Klik <a target="__blank" href=<?php echo $repetitiedata; ?>>hier</a> voor het repetitieschema.</h5>
        </div>
        <div class="row">
            <div class="col s12 m6 repetitietext">
                <select name="repetities" required>
                    <option value="" selected disabled hidden>Kun je naar alle repetities komen? *</option>
                    <option value="Ja">Ja</option>
                    <option value="Nee">Nee</option>           
                </select>
            </div>
            <div class="input-field col s12 m6 toelichtingcontainer">
                <textarea name="toelichting" id="toelichting" class="materialize-textarea toelichtingbox"></textarea>
                <label for="toelichting">Toelichting</label>
            </div>
        </div>

        <div class="row">
            <h3>Contactinformatie</h3>
        </div>

        <div class="row">
            <div class="input-field col s12 m6">
                <input name="email" id="mail" type="email" required>
                <label for="mail">Email *</label>
            </div>
            <div class="input-field col s12 m6">
                <input name="telefoon" id="telefoon" type="tel" class="validate" required>
                <label for="telefoon">Telefoonnummer *</label>
            </div>
        </div>

        <div class="row">
            <h3>Overige</h3>
        </div>

        <div class="row">
            <div class="col s12 m6 input-field">
                <select name="gevonden" id="found" required>
                    <option value="" selected disabled hidden>Hoe heb je ons gevonden? *</option>
                    <option value="Via via">Via via</option>
                    <option value="Via social media">Via social media</option>
                    <option value="Via een ander orkest">Via een ander orkest</option>
                    <option value="Overige">Overige</option>              
                </select>
            </div>
            <div class="input-field col s12 m6">
                <input name="occupation" id="studie" type="text" required>
                <label for="studie">Studie / Werk *</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m12">
                <textarea name="opmerkingen" id="opmerkingen" class="materialize-textarea toelichtingbox"></textarea>
                <label for="opmerkingen">Opmerkingen, bijv.: Ben je geïnteresseerd in een aanvoerderspositie? Zou je nog op een andere manier betrokken willen zijn bij STEP?</label>
            </div>
        </div>
        
        <div class="row">
            <p>
                <label>
                    <span class="privacytekst">Door je aan te melden ga je akkoord met de  <a target="__blank__" href=<?php echo $privacyvoorwaarden; ?>>privacy voorwaarden</a>.</span>
                </label>
            </p>
        </div>
        <button id="formsubmit" class="btn btnblack" type='submit'>Aanmelden</button>
    </form>

    <script>
        const scriptU = 'https://script.google.com/macros/s/AKfycbxR4uuM0TCkz3TGBupb-wFhIJD-IbwmjvSpATvl/exec'
        const form = document.forms['submit-to-google-sheet2']

        function finish_form(text, response) {
            document.getElementById("formsubmit").innerHTML = "Aanmelden"
            alert(text, response)
        }

        form.addEventListener('submit', e => {
            e.preventDefault()
            document.getElementById("formsubmit").innerHTML = "Een moment..."
            fetch(scriptU, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => finish_form('Het formulier is succesvol verzonden! We streven ernaar je binnen een of uiterlijk twee weken een email te sturen vanuit het bestuur.', response))
                .catch(error => finish_form('Er is iets misgegaan, sorry! Zou je je browser en besturingssysteem kunnen sturen naar promotie@ensembleproject.nl? Een andere browser gebruiken zou in ieder geval al nu meteen kunnen helpen. Sorry! - xxx IT', error.message))
        })
    </script>