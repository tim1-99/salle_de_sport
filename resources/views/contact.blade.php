@extends('base')
@section('content')
  
    <div class="adresse">
        <div class="contact">
            <p><b>Adresse </b> : 5 Bd Louis XIV, 59800 Lille </p>
            <p><b>Horaires :</b></p>
            <p> Lundi 19h:00-21h:00 <br>
                Mardi 19h:30–21h:30 <br>
                Jeudi 20h:00–22h: <br>
                Vendredi 20h:00–22h:00 <br>
                Samedi 9h:00–11h:00<br>
            <p> <b>Téléphone</b> : 0600000000</p>
        </div>
        <div class="maps">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5061.834118171535!2d3.0686003764147776!3d50.62865757162675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d59118928ab7%3A0xd0f3b05faaf1c4c!2sLe%20Cnam!5e0!3m2!1sfr!2sfr!4v1730655128607!5m2!1sfr!2sfr"
                width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="formillaire">
        <h1>Contact</h1>
        <form action="">
            <label for="mail">E-mail</label>
            <input type="email" id="mail">
            <label for="demande">Votre demande</label>
            <input type="text" id="demande">
            <label for="message">Message</label>
            <textarea name="" id="message" cols="30" rows="10"></textarea>
            <input type="submit">
        </form>
    </div>
@endsection
