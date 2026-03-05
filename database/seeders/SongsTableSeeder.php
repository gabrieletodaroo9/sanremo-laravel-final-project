<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('songs')->delete();
        
        \DB::table('songs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'edition_id' => 7,
                'title' => 'Brividi',
                'lyrics' => 'Ho sognato di volare con te
Su una bici di diamanti
Mi hai detto sei cambiato,
Non vedo più la luce nei tuoi occhi
La tua paura cos’è?
Un mare dove non tocchi mai
Anche se il sesso non è
La via di fuga dal fondo
Dai non scappare da qui
Non lasciarmi così
Nudo con i brividi
A volte non so esprimermi
E ti vorrei amare, ma sbaglio sempre
E ti vorrei rubare un cielo di perle
E pagherei per andar via,
Accetterei anche una bugia
E ti vorrei amare ma sbaglio sempre
E mi vengono i brividi, brividi, brividi
Tu, che mi svegli il mattino
Tu, che sporchi il letto di vino
Tu, che mi mordi la pelle
Con i tuoi occhi da vipera
E tu, sei il contrario di un angelo
E tu, sei come un pugile all’angolo
E tu scappi da qui, mi lasci così.
Nudo con i brividi
A volte non so esprimermi
E ti vorrei amare, ma sbaglio sempre
E ti vorrei rubare un cielo di perle
E pagherei per andar via,
Accetterei anche una bugia
E ti vorrei amare ma sbaglio sempre
E mi vengono i brividi, brividi, brividi
Dimmi che non ho ragione
Vivo dentro una prigione
Provo a restarti vicino
Ma scusa se poi mando tutto a puttane
Non so dirti ciò che provo, è un mio limite
Per un ti amo ho mischiato droghe e lacrime
Questo veleno che ci sputiamo ogni giorno
Io non lo voglio più addosso
Lo vedi, sono qui,
Su una bici di diamanti, uno fra tanti.
Nudo con i brividi
A volte non so esprimermi
E ti vorrei amare, ma sbaglio sempre
E ti vorrei rubare un cielo di perle
E pagherei per andar via,
Accetterei anche una bugia
E ti vorrei amare, ma sbaglio sempre
E mi vengono i brividi, brividi, brividi.',
                'created_at' => '2026-03-05 17:31:07',
                'updated_at' => '2026-03-05 17:31:07',
            ),
            1 => 
            array (
                'id' => 2,
                'edition_id' => 3,
                'title' => 'Per sempre si',
                'lyrics' => 'È cominciato tutto quanto dal principio
Io che per te ero solo un uomo sconosciuto
Poi diventato un re dal cuore innamorato
Tu una regina ora vestita in bianco sposa
Abbiamo sognato figli in una grande casa
E superato tutte le difficoltà
Perché un amore, non è amore per la vita
Se non ha affrontato la più ripida salita
E si accenderà la musica
E qui ti aspetterò
Il più grande giorno
Ti regalerò
Saremo io e te
Per sempre
Legati per la vita che
Senza te
Non vale niente
Non ha senso vivere
Con la mano sul petto
Io te lo prometto
Davanti a Dio
Saremo io e te
Da qui
Sarà per sempre sì
So bene che è una grande incognita il futuro
Ma insieme a te non mi spaventerà perché
Costruiremo tutto ma non alzeremo un muro
Litigare e far l’amore poi che male c’è
E si accenderà la musica
Per te io canterò
Il più grande giorno
Ti regalerò
Saremo io e te
Per sempre
Legati per la vita che
Senza te
Non vale niente
Non ha senso vivere
Con la mano sul petto
Io te lo prometto
Davanti a Dio
Saremo io e te
Da qui
Sarà per sempre
Sì, soltanto sì
Per questi giorni
E mille altri ancora
Un semplice sì
L’eternità è dentro una parola
Saremo io e te
Per sempre
Legati per la vita che
Senza te
Non vale niente
Non ha senso vivere
Con la mano sul petto
Io te lo prometto
Davanti a Dio
Saremo io e te
Accussì
Sarrà pe sempe sì',
                'created_at' => '2026-03-05 17:57:59',
                'updated_at' => '2026-03-05 18:02:39',
            ),
        ));
        
        
    }
}