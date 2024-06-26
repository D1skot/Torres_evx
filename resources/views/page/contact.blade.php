@extends('page.layout')
@section('content')
<div class="container-fluid main_color my-lg-5 my-3">
    <div class="row">
        <div class="col-lg-6 text-center">
            <h1 class="fw-bold my-3">KONTAKT</h1>
            <p>Maciej Figaszewski <br>
                Kierownik ds. Jakości i Standardów</p>
            <div class="d-flex flex-column my-4">
                <a class="main_color text-decoration-none my-2" href="mailto:maciej.figaszewski@ssangyong-auto.pl">maciej.figaszewski@ssangyong-auto.pl</a>
                <a class="main_color text-decoration-none my-2" href="tel:533995144">+48 533 995 144</a>
            </div>
        </div>
        <div class="col-lg-6">
            <form id="contactForm">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="row mt-2">
                            <div class="col-lg-6 mb-2">
                                <div class="contactForm-register-firstname">
                                    <label class="ps-3 pb-2" for="contactForm_firstname">Imię <span class="main_color">*</span></label>
                                    <input type="text" id="contactForm_firstname" class="form-control" name="formContact[firstname]" placeholder="Wpisz swoje imię" value="" />
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="contactForm-register-email">
                                    <label class="ps-3 pb-2" for="contactForm_email">Email <span class="main_color">*</span></label>
                                    <input type="email" id="contactForm_email" class="form-control" name="formContact[email]" placeholder="Wpisz swoje e-mail" value="" />
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-6">
                                <div class="contactForm-register-phone">
                                    <label class="ps-3 pb-2" for="contactForm_phone">Telefon </label>
                                    <input type="text" id="contactForm_phone" class="form-control" name="formContact[phone]" placeholder="Wpisz swój telefon" value="" />
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contactForm-register-adres">
                                    <label class="ps-3 pb-2" for="contactForm_adres">Adres</label>
                                    <input type="text" id="contactForm_adres" class="form-control" name="formContact[lastname]" placeholder="Wpisz swój adres" value="" />
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-lg-2">
                            <div class="col-12 ">
                                <div class="mt-3">
                                    <div class="contactForm-register-topic">
                                        <label class="ps-3 pb-2" for="contactForm_topic">Temat</label>
                                        <input type="text" id="contactForm_topic" class="form-control" name="formContact[lastname]" placeholder="Wpisz  Temat" value="" />
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-lg-2">
                            <div class="col-12 ">
                                <div class="mt-3">
                                    <div class="contactForm-register-question">
                                        <label class="ps-3 pb-2" for="contactForm_question">Wiadomość</label>
                                        <textarea placeholder="Tutaj wpisz swoją wioadomość" name="formContact[question]" class="form-control textarea" id="contactForm_question" rows="10" maxlength="300"></textarea>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="row mt-2">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="contactForm_AgreeRegulations1" name="formContact[agree_regulations1]" />
                                    <label class="form-check-label" for="contactForm_AgreeRegulations1">
                                        *Wyrażam zgodę na przetwarzanie moich danych przez ssangyong-auto.pl
                                    </label>
                                    <div class="invalid-feedback contactForm-agree-regulations1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-12  text-center">
                                <button class="btn-form w-100 border-0 fw-bold" type="submit">Wyślij</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d373732.98042843665!2d19.69344136541011!3d52.020724856508835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNTHCsDU3JzA4LjAiTiAxOcKwMzAnNDYuMiJF!5e0!3m2!1spl!2spl!4v1715258224308!5m2!1spl!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection
