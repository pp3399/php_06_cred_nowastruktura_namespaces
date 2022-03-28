<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\utilities\CalcResult;

class CalcCtrl {

    private $form;   //dane formularza (do obliczeń i dla widoku)
    private $result; //inne dane dla widoku

    /**
     * Konstruktor - inicjalizacja właściwości
     */
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    /**
     * Pobranie parametrów
     */
    public function getParams() {
        $this->form->amt = getFromRequest('amt');
        $this->form->yrs = getFromRequest('yrs');
        $this->form->rt = getFromRequest('rt');
    }

    /**
     * Walidacja parametrów
     * @return true jeśli brak błedów, false w przeciwnym wypadku 
     */
    public function validate() {
        // sprawdzenie, czy parametry zostały przekazane
        if (!(isset($this->form->amt) && isset($this->form->yrs) && isset($this->form->rt))) {
            // sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            return false; //zakończ walidację z błędem
        }

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if ($this->form->amt == "") {
            getMessages()->addError('Nie podano liczby 1');
        }
        if ($this->form->yrs == "") {
            getMessages()->addError('Nie podano liczby 2');
        }
        if ($this->form->rt == "") {
            getMessages()->addError('Nie podano liczby 3');
        }

        // nie ma sensu walidować dalej gdy brak parametrów
        if (!getMessages()->isError()) {

            // sprawdzenie, czy $x i $y są liczbami całkowitymi
            if (!is_numeric($this->form->amt)) {
                getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
            }

            if (!is_numeric($this->form->yrs)) {
                getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
            }

            if (!is_numeric($this->form->rt)) {
                getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
            }
        }

        return !getMessages()->isError();
    }

    /**
     * Pobranie wartości, walidacja, obliczenie i wyświetlenie
     */
    public function process() {

        $this->getparams();

        if ($this->validate()) {

            //konwersja parametrów na int
            $this->form->amt = intval($this->form->amt);
            $this->form->yrs = intval($this->form->yrs);
            $this->form->rt = intval($this->form->rt);
            getMessages()->addInfo('Parametry poprawne.');

            //wykonanie operacji
            $amount = $this->form->amt;
            $years = $this->form->yrs * 12;
            $rate = $this->form->rt / 100;

            $result = ($amount * $rate) / (12 * (1 - ((12 / (12 + $rate)) ** $years))); //wzór na raty równe
            $this->result->result = number_format($result, 2, ',', ' '); //zaokrąglanie do 2 miejsc po przecinku - ? notacja francuska ?

            getMessages()->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }

    /**
     * Wygenerowanie widoku
     */
    public function generateView() {


        getSmarty()->assign('page_title', 'Przykład 06');
        getSmarty()->assign('page_description', 'Aplikacja z jednym "punktem wejścia". Model MVC, w którym jeden główny kontroler używa różnych obiektów kontrolerów w zależności od wybranej akcji - przekazanej parametrem.');
        getSmarty()->assign('page_header', 'Kontroler główny');

        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);

        getSmarty()->display('CalcView.tpl');
    }

}
