@extends('page.layout')
@section('content')
<div class="container-fluid main_color my-lg-5 my-3">
    <div class="row">
        <div class="col-lg-6 text-center">
            <h1 class="fw-bold my-3">KONTAKT</h1>
            <p>500 Terry Francois Street, 6th Floor. San Francisco, CA 94158</p>
            <div class="d-flex flex-column my-4">
                <a class="main_color text-decoration-none my-2" href="mailto:info@mysite.com">info@mysite.com</a>
                <a class="main_color text-decoration-none my-2" href="tel:123456789">123-456-789</a>
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
                                        *Wyrażam zgodę na przetwarzanie moich danych przez ......
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68409.72923122489!2d-74.07262698142253!3d40.73317153491287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5e0!3m2!1spl!2spl!4v1715157054322!5m2!1spl!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection
