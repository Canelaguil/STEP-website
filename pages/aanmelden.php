<div class="row hometext">
    <h2>Aanmeldingsformulier</h2>
</div>
<!-- https://script.google.com/macros/s/AKfycbzOpO3bJwBfW8YXBEtpVVnG9nZN5-RYRbT9zxHhi-CRWTfQ8S0U/exec -->
<div class="row hometext formblok">
    <form name='submit-to-google-sheet2' class="col s12">
        <div class="row">
            <div class="input-field col s12 m6">
                <input name="first_name" id="first_name" type="text" class="validate">
                <label for="first_name">Naam *</label>
            </div>
            <div class="input-field col s12 m6">
                <input name="last_name" id="last_name" type="text" class="validate">
                <label for="last_name">Achternaam *</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input name="birth_year" id="year" type="number">
                <label for="year">Geboortejaar *</label>
            </div>

            <div class="input-field col s12 m6">
                <input name="city" id="city" type="text">
                <label for="city">Woonplaats *</label>
            </div>
        </div>

        <div class="row">
            <h3>Instrument</h3>
        </div>
        <div class="row">
            <div class="col s12 m6 input-field">
                <select name="instrument">
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
                    <option value="Fagot">Fagot</option>
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
                <input name="orkestervaring" id="ervaring" type="number">
                <label for="ervaring">Aantal jaar orkestervaring *</label>
            </div>

            <div class="input-field col s12 m6">
                <input name="orkesten" id="orkesten" type="text">
                <label for="orkesten">Orkesten *</label>
            </div>
        </div>

        <div class="row">
            <h3>Repetities</h3>
        </div>
        <div class="row">
            <div class="col s12 m6 repetitietext">
                <select name="repetities">
                    <option value="" selected disabled hidden>Kun je naar alle repetities komen? *</option>
                    <option value="Ja">Ja</option>
                    <option value="Nee">Nee</option>           
                </select>
                <!-- <p class='formtext'>
                    Kun je naar alle repetities komen? *
                </p>
                <p class='formtext'>
                    <input name="repetities" type="radio" id="ja" />
                    <label for="ja">Ja</label>
                </p>
                <p class='formtext'>
                    <input name="repetities" type="radio" id="nee" />
                    <label for="nee">Nee</label>
                </p> -->
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
                <input name="email" id="mail" type="email">
                <label for="mail">Email *</label>
            </div>
            <div class="input-field col s12 m6">
                <input name="telefoon" id="telefoon" type="tel" class="validate">
                <label for="telefoon">Telefoonnummer *</label>
            </div>
        </div>

        <div class="row">
            <h3>Overige</h3>
        </div>

        <div class="row">
            <div class="col s12 m6 input-field">
                <select name="gevonden" id="found">
                    <option value="" selected disabled hidden>Hoe heb je ons gevonden? *</option>
                    <option value="Via via">Via via</option>
                    <option value="Via social media">Via social media</option>
                    <option value="Via een ander orkest">Via een ander orkest</option>
                    <option value="Overige">Overige</option>              
                </select>
            </div>
            <div class="input-field col s12 m6">
                <input name="occupation" id="studie" type="text">
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
                <!-- <input id="checkbox" type="checkbox"/> -->
                <label>
                    <span class="privacytekst">Door je aan te melden ga je akkoord met de  <a target="__blank__" href="https://docs.google.com/document/d/1tK6jWpbPAzJ2IYK1tcwfezX6kWttIhSmkZ3zZVDPsJg/edit?usp=sharing">privacy voorwaarden</a>.</span>
                </label>
            </p>
        </div>
        <button class="btn btnblack" type='submit'>Aanmelden</button>
    </form>

    <script>
        const scriptU = 'https://script.google.com/macros/s/AKfycbxR4uuM0TCkz3TGBupb-wFhIJD-IbwmjvSpATvl/exec'
        const form = document.forms['submit-to-google-sheet2']

        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptU, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => alert('Het formulier is succesvol verzonden!', response))
                .catch(error => alert('Er is iets misgegaan. Het formulier is niet opgestuurt.', error.message))
        })

        $("found").css({"color": "black"});
    </script>