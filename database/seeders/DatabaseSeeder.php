<?php

//namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {         
        DB::table('users')->insert([
            ['name' => 'Romeo', 'cognome' => 'Verdi',  'residenza' => 'Firenze', 'username' => 'staffstaff','role' => 'staff',  'data_di_nascita' => '1993-01-22','occupazione' =>'cardiologo', 'password' => Hash::make('tdRJy6L9'), 'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'Luxio', 'cognome' => 'Alexio',  'residenza' => 'Ancona', 'username' => 'luxioverde','role' => 'staff',  'data_di_nascita' => '1945-05-01','occupazione' =>'Informatico', 'password' => Hash::make('tdRJy6L9'), 'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'Alex', 'cognome' => 'Gialli',  'residenza' => 'Padova', 'username' => 'alexgiali','role' => 'staff',  'data_di_nascita' => '1999-07-18','occupazione' =>'Cuoco', 'password' => Hash::make('tdRJy6L9'), 'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            
            ['name' => 'Maxim', 'cognome' => 'Rosso','residenza' => 'Falconara', 'username' => 'maximrosso', 'role' => 'user', 'data_di_nascita' => '1991-01-10', 'occupazione' =>'Camionista','password' => Hash::make('tdRJy6L9'),'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'Leonardo', 'cognome' => 'Verde','residenza' => 'Roma', 'username' => 'leonardoverde', 'role' => 'user', 'data_di_nascita' => '1999-10-26', 'occupazione' =>'Cantante','password' => Hash::make('tdRJy6L9'),'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],  
            ['name' => 'Fixi', 'cognome' => 'Umberto','residenza' => 'Ancona', 'username' => 'fixiumberto', 'role' => 'user', 'data_di_nascita' => '1950-10-11', 'occupazione' =>'Cameriere','password' => Hash::make('tdRJy6L9'),'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],  
            ['name' => 'Marco', 'cognome' => 'Gialli','residenza' => 'Ancona', 'username' => 'clieclie', 'role' => 'user', 'data_di_nascita' => '1988-10-10', 'occupazione' =>'Studente','password' => Hash::make('tdRJy6L9'),'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],  

            ['name' => 'Mario', 'cognome' => 'Rossi', 'residenza' => 'Ancona',   'username' => 'adminadmin', 'data_di_nascita' => '1997-02-10','occupazione' =>'Admisistratore', 'role' => 'admin','password' => Hash::make('tdRJy6L9'), 'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")], 

        ]);


        DB::table('autos')->insert([
            [ 'marca' => 'Jeep','modello'=>'Jeep Compass 4xe','image'=> 'Jeep Compass.jpg','targa'=>'AB456GH','prezzo_n_g'=>'150','numero_posti'=>'4','allestimento'=>'Standard', 'data_inizio'=>'2023-02-21', 'data_fine'=>'2023-01-05', ],
            [ 'marca' => 'Jeep','modello'=>'Jeep Rinnegata','image'=> 'Jeep Rinnegata.jpg','targa'=>'IJ789KL','prezzo_n_g'=>'200','numero_posti'=>'5', 'allestimento'=>'Automatic','data_inizio'=>'2023-12-21', 'data_fine'=>'2024-03-02',],
            [ 'marca' => 'Jeep','modello'=>'Jeep Wrangler', 'image'=> 'Jeep Wrangler.jpg','targa'=>'UV678WK','prezzo_n_g'=>'250','numero_posti'=>'4','allestimento'=>'Premium','data_inizio'=>'2023-06-21', 'data_fine'=>'2024-03-12',],

            [ 'marca' => 'Audi','modello' =>'Audi A1 Sportback','image'=> 'Audi A1 Sportback.jpg', 'targa'=>'WX789UT','prezzo_n_g'=>'400','numero_posti'=>'5','allestimento'=>'Premium','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'Audi','modello' =>'CityCarver Audi A1','image'=> 'CityCarver Audi A1.jpg', 'targa'=>'EER356J','prezzo_n_g'=>'345','numero_posti'=>'5','allestimento'=>'Automatic','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'Audi','modello' =>'Audi A4','image'=> 'Audi A4.jpg', 'targa'=>'4RFG3TY','prezzo_n_g'=>'200','numero_posti'=>'5','allestimento'=>'Automatic','data_inizio'=>'2023-01-21', 'data_fine'=>'2025-01-02',],
            [ 'marca' => 'Audi','modello' =>'Audi Q7','image'=> 'Audi Q7.jpg', 'targa'=>'HHJ7004','prezzo_n_g'=>'250','numero_posti'=>'5','allestimento'=>'Premium','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],

            [ 'marca' => 'BMW','modello'=>'BMW X1','image'=> 'BMW X1.jpg', 'targa'=>'OI34E76','prezzo_n_g'=>'250','numero_posti'=>'5','allestimento'=>'Standard','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'BMW','modello'=>'BMW X5','image'=> 'BMW X5.jpg', 'targa'=>'PG0I3RR','prezzo_n_g'=>'130','numero_posti'=>'5','allestimento'=>'Luxury','data_inizio'=>'2023-01-21', 'data_fine'=>'2023-06-02',],
            [ 'marca' => 'BMW','modello'=>'BMW X6','image'=> 'BMW X6.jpg', 'targa'=>'46HW334','prezzo_n_g'=>'550','numero_posti'=>'5','allestimento'=>'Premium','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'BMW','modello'=>'BMW seri 7 Cabriolet','image'=> 'BMW seri 7 Cabriolet.jpg', 'targa'=>'UUB58DI','prezzo_n_g'=>'300','numero_posti'=>'5','allestimento'=>'Automatic','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'BMW','modello'=>'BMW M8','image'=> 'BMW M8.jpg', 'targa'=>'PO904RT','prezzo_n_g'=>'170','numero_posti'=>'5','allestimento'=>'Luxury','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],

            [ 'marca' => 'Cupra', 'modello'=>'Cupra Ateca','image'=> 'Cupra Ateca.jpg','targa'=>'PP0I3RR','prezzo_n_g'=>'100','numero_posti'=>'6','allestimento'=>'Automatic','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'Cupra', 'modello'=>'Cupra Formentor','image'=> 'Cupra Formento.jpg', 'targa'=>'WX889UT','prezzo_n_g'=>'75','numero_posti'=>'6','allestimento'=>'Premium','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'Cupra', 'modello'=>'Cupra Leon','image'=> 'Cupra Leon.jpg', 'targa'=>'PG0O3RR','prezzo_n_g'=>'240','numero_posti'=>'6','allestimento'=>'Automatic','data_inizio'=>'2023-01-21', 'data_fine'=>'2023-08-02',],

            [ 'marca' => 'Jaguar','modello'=>'Jaguar E-space','image'=> 'Jaguar E-space.jpg', 'targa'=>'PG0I30R','prezzo_n_g'=>'250','numero_posti'=>'4','allestimento'=>'Premium','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'Jaguar','modello'=>'Jaguar XF','image'=> 'Jaguar XF.jpg', 'targa'=>'UUB08DI','prezzo_n_g'=>'130','numero_posti'=>'6','allestimento'=>'Luxury','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'Jaguar','modello'=>'Jaguar XE','image'=> 'Jaguar XE.jpg', 'targa'=>'UEC58DI','prezzo_n_g'=>'200','numero_posti'=>'5','allestimento'=>'Standard','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'Jaguar','modello'=>'Jaguar XJ','image'=> 'Jaguar XJ.jpg', 'targa'=>'2SB58DI','prezzo_n_g'=>'310','numero_posti'=>'5','allestimento'=>'Premium','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],

            [ 'marca' => 'Honda','modello'=>'Honda Honda C','image'=> 'Honda Honda C.jpg', 'targa'=>'POB53DI','prezzo_n_g'=>'150','numero_posti'=>'4','allestimento'=>'Luxury','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'Honda','modello'=>'Honda CR-V','image'=> 'Honda CR-V.jpg', 'targa'=>'PG0I3RE','prezzo_n_g'=>'140','numero_posti'=>'4','allestimento'=>'Standard','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'Honda','modello'=>'Honda HR-V','image'=> 'Honda HR-V.jpg', 'targa'=>'WX349UT','prezzo_n_g'=>'650','numero_posti'=>'4','allestimento'=>'Premium','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],

            [ 'marca' => 'Citroen', 'modello'=>'Citroen C1','image'=> 'Citroen C1.jpg', 'targa'=>'QS789UT','prezzo_n_g'=>'190','numero_posti'=>'5','allestimento'=>'Standard','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'Citroen', 'modello'=>'Citroen C3','image'=> 'Citroen C3.jpg', 'targa'=>'WX76NUT','prezzo_n_g'=>'360','numero_posti'=>'5','allestimento'=>'Premium','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'Citroen', 'modello'=>'Citroen C4','image'=> 'Citroen C4.jpg', 'targa'=>'WP789UT','prezzo_n_g'=>'650','numero_posti'=>'5','allestimento'=>'Standard','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'Citroen', 'modello'=>'Citroen C4 Actus','image'=> 'Citroen C4 Actus.jpg', 'targa'=>'GDR563L','prezzo_n_g'=>'50','numero_posti'=>'4','allestimento'=>'Premium','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'Citroen', 'modello'=>'Citroen C5 Aircross','image'=> 'Citroen C5 Aircross.jpg', 'targa'=>'BOI904R','prezzo_n_g'=>'110','numero_posti'=>'6','allestimento'=>'Luxury','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'Citroen', 'modello'=>'Citroen C1','image'=> 'Citroen C1.jpg', 'targa'=>'QS789UT','prezzo_n_g'=>'130','numero_posti'=>'5','allestimento'=>'Standard','data_inizio'=>'2023-01-21', 'data_fine'=>'2023-02-02',],
            [ 'marca' => 'Citroen', 'modello'=>'Citroen C3','image'=> 'Citroen C3.jpg', 'targa'=>'WX76NUT','prezzo_n_g'=>'120','numero_posti'=>'5','allestimento'=>'Premium','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'Citroen', 'modello'=>'Citroen C4','image'=> 'Citroen C4.jpg', 'targa'=>'WP789UT','prezzo_n_g'=>'200','numero_posti'=>'5','allestimento'=>'Standard','data_inizio'=>'2022-01-21', 'data_fine'=>'2023-05-02',],

            [ 'marca' => 'Fiat', 'modello'=>'Fiat 500','image'=> 'Fiat 500.jpg', 'targa'=>'OI14E76','prezzo_n_g'=>'230','numero_posti'=>'4','allestimento'=>'Standard','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'Fiat', 'modello'=>'Fiat 500 L','image'=> 'Fiat 500 L.jpg', 'targa'=>'OI343E6','prezzo_n_g'=>'250','numero_posti'=>'3','allestimento'=>'Luxury','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],
            [ 'marca' => 'Fiat', 'modello'=>'Fiat Qubo', 'image'=> 'Fiat Qubo.jpg','targa'=>'OF34E76','prezzo_n_g'=>'100','numero_posti'=>'4','allestimento'=>'Premium','data_inizio'=>'2023-01-21', 'data_fine'=>'2024-01-02',],

            ['marca' => 'Jeep', 'modello' => 'Jeep Compass 4xe', 'image' => 'Jeep_Compass.jpg', 'targa' => 'AB456GH', 'prezzo_n_g' => '155', 'numero_posti' => '4', 'allestimento' => 'Standard', 'data_inizio' => '2023-02-21', 'data_fine' => '2024-01-05'],
            ['marca' => 'Toyota', 'modello' => 'Toyota Corolla', 'image' => 'Toyota_Corolla.jpg', 'targa' => 'CD789EF', 'prezzo_n_g' => '160', 'numero_posti' => '5', 'allestimento' => 'Premium', 'data_inizio' => '2023-03-15', 'data_fine' => '2023-12-20'],
            ['marca' => 'Ford', 'modello' => 'Ford Mustang', 'image' => 'Ford_Mustang.jpg', 'targa' => 'EF123CD', 'prezzo_n_g' => '300', 'numero_posti' => '2', 'allestimento' => 'GT', 'data_inizio' => '2023-04-10', 'data_fine' => '2023-11-25'],

            ['marca' => 'Ford', 'modello' => 'Ford Fiesta', 'image' => 'ford_fiesta.jpg', 'targa' => 'XY123ZT', 'prezzo_n_g' => '90', 'numero_posti' => '5', 'allestimento' => 'Standard', 'data_inizio' => '2023-04-01', 'data_fine' => '2023-08-29'],
            ['marca' => 'Volkswagen', 'modello' => 'VW Golf', 'image' => 'vw_golf.jpg', 'targa' => 'PK678LM', 'prezzo_n_g' => '110', 'numero_posti' => '5', 'allestimento' => 'Comfortline', 'data_inizio' => '2023-03-20', 'data_fine' => '2023-10-15'],
            ['marca' => 'Honda', 'modello' => 'Honda Civic', 'image' => 'honda_civic.jpg', 'targa' => 'WQ987RV', 'prezzo_n_g' => '135', 'numero_posti' => '5', 'allestimento' => 'Sport', 'data_inizio' => '2023-05-10', 'data_fine' => '2023-12-05'],

            ['marca' => 'BMW', 'modello' => 'ALPINA B5', 'image' => 'alpina_b5.jpg', 'targa' => 'AL123BT', 'prezzo_n_g' => '270', 'numero_posti' => '5', 'allestimento' => 'B5 Edition 50', 'data_inizio' => '2023-06-15', 'data_fine' => '2023-12-31'],
            ['marca' => 'Lexus', 'modello' => 'LEXUS LS', 'image' => 'lexus_ls.jpg', 'targa' => 'LS789QA', 'prezzo_n_g' => '320', 'numero_posti' => '5', 'allestimento' => 'F Sport', 'data_inizio' => '2023-07-20', 'data_fine' => '2024-06-30'],

            ['marca' => 'BMW', 'modello' => 'ALPINA B5', 'image' => 'alpina_b5.jpg', 'targa' => 'AL123BT', 'prezzo_n_g' => '270', 'numero_posti' => '5', 'allestimento' => 'B5 Edition 50', 'data_inizio' => '2023-06-15', 'data_fine' => '2023-12-31'],
            ['marca' => 'BMW', 'modello' => 'ALPINA B5', 'image' => 'alpina_b5_2.jpg', 'targa' => 'AL567CD', 'prezzo_n_g' => '260', 'numero_posti' => '5', 'allestimento' => 'B5 BiTurbo', 'data_inizio' => '2023-05-10', 'data_fine' => '2023-11-30'],
            ['marca' => 'Caterham', 'modello' => 'CATERHAM SEVEN', 'image' => 'caterham.jpg', 'targa' => 'SE789YZ', 'prezzo_n_g' => '110', 'numero_posti' => '2', 'allestimento' => 'Classic', 'data_inizio' => '2023-03-20', 'data_fine' => '2023-10-15'],
            ['marca' => 'Ferrari', 'modello' => 'FERRARI ENZO', 'image' => 'ferrari_enzo.jpg', 'targa' => 'EN234UV', 'prezzo_n_g' => '950', 'numero_posti' => '2', 'allestimento' => 'Limited Edition', 'data_inizio' => '2023-07-10', 'data_fine' => '2024-06-30'],
            ['marca' => 'Ford', 'modello' => 'FORD S-MAX', 'image' => 'ford_s_max.jpg', 'targa' => 'SM456DE', 'prezzo_n_g' => '160', 'numero_posti' => '7', 'allestimento' => 'Titanium', 'data_inizio' => '2023-02-01', 'data_fine' => '2023-09-31'],
            ['marca' => 'Infiniti', 'modello' => 'INFINITI Q50', 'image' => 'infiniti_q50.jpg', 'targa' => 'Q550NM', 'prezzo_n_g' => '190', 'numero_posti' => '5', 'allestimento' => 'Red Sport 400', 'data_inizio' => '2023-08-15', 'data_fine' => '2024-07-31'],
            ['marca' => 'Lexus', 'modello' => 'LEXUS LS', 'image' => 'lexus_ls.jpg', 'targa' => 'LS789QA', 'prezzo_n_g' => '720', 'numero_posti' => '5', 'allestimento' => 'F Sport', 'data_inizio' => '2023-07-20', 'data_fine' => '2024-06-30'],

            ['marca' => ' Nissan', 'modello' => 'CAMPING CAR ', 'image' => 'camping car.jpg', 'targa' => 'DS789QR', 'prezzo_n_g' => '1100', 'numero_posti' => '5', 'allestimento' => 'Viaggio', 'data_inizio' => '2023-08-10', 'data_fine' => '2024-09-30'],
            ['marca' => 'Lexus', 'modello' => 'MINIVAN 8', 'image' => 'minivan 8.jpg', 'targa' => 'PS7Y9Q7', 'prezzo_n_g' => '820', 'numero_posti' => '8', 'allestimento' => 'Viaggio', 'data_inizio' => '2023-05-09', 'data_fine' => '2024-01-24'],
            ['marca' => 'Citroen', 'modello' => 'MINIVAN', 'image' => 'minivan.jpg', 'targa' => 'GS7R9QJ', 'prezzo_n_g' => '420', 'numero_posti' => '6', 'allestimento' => 'Viaggio', 'data_inizio' => '2023-08-25', 'data_fine' => '2023-11-23'],
            ['marca' => ' Nissan', 'modello' => 'PULMINO', 'image' => 'pulmino.jpg', 'targa' => 'OR789TA', 'prezzo_n_g' => '500', 'numero_posti' => '10', 'allestimento' => 'Viaggio', 'data_inizio' => '2023-06-10', 'data_fine' => '2024-02-02'],
            ['marca' => 'Renault', 'modello' => 'MINIBUS', 'image' => 'minibus 14.jpg', 'targa' => 'YM7Q9QA', 'prezzo_n_g' => '700', 'numero_posti' => '14', 'allestimento' => 'Viaggio', 'data_inizio' => '2023-09-01', 'data_fine' => '2024-01-30'],
            ['marca' => 'Opel', 'modello' => 'LUXURY', 'image' => 'luxury.jpg', 'targa' => 'PS7J9RA', 'prezzo_n_g' => '920', 'numero_posti' => '4', 'allestimento' => 'Sport', 'data_inizio' => '2023-09-03', 'data_fine' => '2023-11-20'],
            ['marca' => 'BMW', 'modello' => 'LAMBORGINI', 'image' => 'lamborgini.jpg', 'targa' => 'AX78FQA', 'prezzo_n_g' => '1000', 'numero_posti' => '4', 'allestimento' => 'Sport', 'data_inizio' => '2023-06-18', 'data_fine' => '2023-12-30'],

        ]);

        DB::table('faqs')->insert([
            ['id' => '1', 'domanda' => 'Quali sono i requisiti minimi per noleggiare un\'auto?', 'risposta'=>'In genere, è necessario avere almeno 21 anni (talvolta 25) e una patente di guida valida. Alcune agenzie potrebbero richiedere una carta di credito per la prenotazione.'],
            ['id' => '2', 'domanda' => 'Quali documenti devo presentare al momento del ritiro dell\'auto?', 'risposta'=>'Solitamente, dovrai presentare la tua patente di guida valida, un documento d\'identità e una carta di credito a tuo nome per la cauzione.'],
            ['id' => '3', 'domanda' => 'Quali opzioni di assicurazione sono disponibili per il noleggio dell\'auto?', 'risposta'=>'le agenzie offrono opzioni di assicurazione di base e premium che coprono danni, furto e responsabilità civile. Puoi anche optare per una copertura supplementare.'],
            ['id' => '4', 'domanda' => 'Qual è la politica riguardante i chilometri inclusi nel noleggio?', 'risposta'=>'Alcuni noleggi includono un numero limitato di chilometri, mentre altri potrebbero offrire chilometraggio illimitato. Verifica le condizioni prima del noleggio.'],
            ['id' => '5', 'domanda' => 'Posso aggiungere guidatori extra alla prenotazione?', 'risposta'=>'Sì, molte agenzie consentono di aggiungere guidatori extra a un costo aggiuntivo. Assicurati di dichiarare tutti i guidatori aggiuntivi per mantenere la copertura assicurativa.'], 
            ['id' => '6', 'domanda' => 'Cosa succede in caso di incidente o guasto durante il noleggio?', 'risposta'=>'Di solito, ci sono procedure da seguire in caso di incidente o guasto. Contatta immediatamente l\'agenzia e segui le istruzioni fornite.'],
            ['id' => '7', 'domanda' => 'Qual è la politica di carburante?', 'risposta'=>'Alcune agenzie richiedono di restituire l\'auto con lo stesso livello di carburante con cui è stata ritirata. Altre potrebbero offrire opzioni prepagate per il carburante.'],
            ['id' => '8', 'domanda' => 'Posso modificare o annullare una prenotazione?', 'risposta'=>'Molte agenzie consentono modifiche o annullamenti, ma potrebbero applicare penali o tariffe. Verifica la politica di cancellazione al momento della prenotazione.'],
            ['id' => '9', 'domanda' => 'Quali sono le restrizioni geografiche per il noleggio dell\'auto?', 'risposta'=>'Alcune agenzie potrebbero imporre limitazioni su dove è consentito guidare l\'auto noleggiata, ad esempio vietando di attraversare confini nazionali. Verifica queste restrizioni in anticipo.'],
            ['id' => '10', 'domanda' => 'Come viene gestita la restituzione dell\'auto?', 'risposta'=>'Solitamente, devi restituire l\'auto presso la stessa agenzia o un punto designato alla data e all\'ora concordate. Assicurati che l\'auto sia pulita e in buone condizioni come al momento del ritiro.'],
        ]);

        DB::table('prenotaziones')->insert([
          
        ]);

    }
}
