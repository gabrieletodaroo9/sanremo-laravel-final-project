<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('artists')->delete();
        
        \DB::table('artists')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Sal Da Vinci',
                'type' => 'solista',
                'bio' => 'Voce iconica della moderna tradizione napoletana, Sal Da Vinci incarna il perfetto equilibrio tra il pop contemporaneo e il teatro canzone. Con una carriera iniziata da giovanissimo e consacrata da successi sanremesi e produzioni teatrali da record, l\'artista continua a narrare Napoli con un linguaggio universale, unendo una vocalità potente a una sensibilità interpretativa rara.',
                'img_url' => 'artists/images/NHgiGoqviOgizuS0Oh93LTVWVyzNp2Ak8cJKtfUV.webp',
                'created_at' => '2026-03-05 14:32:55',
                'updated_at' => '2026-03-05 14:32:55',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Sayf',
                'type' => 'solista',
                'bio' => 'Sayf rappresenta la nuova wave della musica urban italiana, capace di fondere sonorità elettroniche e testi introspettivi. Con un’identità artistica multiculturale e una scrittura tagliente, si è imposto all\'attenzione di critica e pubblico come una delle voci più originali del panorama emergente, portando sul palco una freschezza sonora che guarda oltre i confini nazionali.',
                'img_url' => 'artists/images/33wDC1krck4d3f6dTRNFdpta084fGpTlh4DyFE9O.webp',
                'created_at' => '2026-03-05 15:24:53',
                'updated_at' => '2026-03-05 15:24:53',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Ditonellapiaga',
                'type' => 'solista',
                'bio' => 'Pseudonimo di Margherita Carducci, Ditonellapiaga è una delle artiste più versatili e camaleontiche del nuovo pop italiano. Il suo stile spazia con disinvoltura dal nu-disco al soul, passando per il rap e la canzone d\'autore. Salita alla ribalta con l\'iconica partecipazione a Sanremo 2022 in coppia con Donatella Rettore, si distingue per una scrittura ironica, sensuale e profondamente contemporanea.',
                'img_url' => 'artists/images/Kyl0CiFCOiEhwSHYEEY0YuRj6tfZFQSmUBVFoPu1.webp',
                'created_at' => '2026-03-05 15:28:19',
                'updated_at' => '2026-03-05 15:28:19',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Olly',
                'type' => 'solista',
            'bio' => 'Vincitore a sorpresa ma con merito di Sanremo 2025, Olly (Federico Olivieri) rappresenta l\'ascesa definitiva del pop-urban ligure. Capace di mescolare ritmiche trascinanti a una scrittura che parla con estrema onestà della sua generazione, ha saputo trasformare l\'energia delle sue hit virali in una maturità scenica che ha conquistato l\'Ariston, portando una ventata di euforia e modernità nel palmarès del Festival.',
                'img_url' => 'artists/images/4FSLLq6JxWfde0bpHmkQDFRtZzAtfJO7J7XX0PYL.jpg',
                'created_at' => '2026-03-05 15:31:14',
                'updated_at' => '2026-03-05 15:31:14',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Lucio Corsi',
                'type' => 'solista',
                'bio' => 'Medaglia d\'argento e vera rivelazione estetica dell\'edizione, Lucio Corsi è il "folletto" del glam-rock toscano. La sua bio artistica racconta di mondi fantastici, uno stile androgino e una musicalità che pesca dal meglio degli anni \'70 per portarlo nel futuro. Il suo secondo posto è il trionfo dell\'originalità e di un cantautorato visionario che non ha paura di osare tra favole moderne e chitarre rock.',
                'img_url' => 'artists/images/epznx4HsJoJNn8GVabVic5OAsWcuxJSs4aJmammp.webp',
                'created_at' => '2026-03-05 15:32:50',
                'updated_at' => '2026-03-05 15:32:50',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Brunori Sas',
                'type' => 'solista',
                'bio' => 'Con la consueta lucidità e una dote innata per il racconto dei sentimenti comuni, Dario Brunori si è classificato terzo, confermando la forza del cantautorato colto ma accessibile. La sua partecipazione ha dato all\'edizione 2025 una profondità poetica unica, trattando temi complessi con la consueta ironia e un\'eleganza orchestrale che lo rende uno degli eredi più autorevoli della grande scuola dei cantautori italiani.',
                'img_url' => 'artists/images/kScB6nSF3RSndW0ekETToY5VIIIBGXo7xKRB7V37.avif',
                'created_at' => '2026-03-05 15:43:26',
                'updated_at' => '2026-03-05 15:43:26',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Mahmood',
                'type' => 'solista',
            'bio' => 'Alessandro Mahmoud, in arte Mahmood, è il rivoluzionario del pop urbano italiano. Con una scrittura che intreccia influenze mediorientali, r&b e cantautorato classico, ha ridefinito i canoni estetici e sonori del Festival di Sanremo, vincendo due edizioni (2019 e 2022). Artista dal respiro internazionale, la sua voce duttile e il suo stile d\'avanguardia lo rendono un\'icona di modernità e sperimentazione, capace di scalare le classifiche globali mantenendo una profondità emotiva fuori dal comune.',
                'img_url' => 'artists/images/rMErdZMX5ZuXfuycCTWCTg9EYkLlmCLqqRT4jQzb.webp',
                'created_at' => '2026-03-05 17:16:46',
                'updated_at' => '2026-03-05 17:16:46',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Blanco',
                'type' => 'solista',
                'bio' => 'Pseudonimo di Riccardo Fabbriconi, Blanco è l\'energia pura della nuova generazione della musica italiana. Esploso con una forza d\'urto senza precedenti, unisce l\'attitudine punk al romanticismo più crudo e disarmante. Vincitore di Sanremo 2022 a soli 19 anni, si distingue per una presenza scenica elettrica e una vocalità istintiva che rompe gli schemi. La sua musica è un manifesto di libertà espressiva, capace di tradurre l\'irrequietezza giovanile in inni generazionali immediati e travolgenti.',
                'img_url' => 'artists/images/TU77ASzIZB6kSSfvZkHE7z9dYejryKSNytWCrVCR.avif',
                'created_at' => '2026-03-05 17:19:59',
                'updated_at' => '2026-03-05 17:19:59',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Arisa',
                'type' => 'solista',
                'bio' => 'Arisa, pseudonimo di Rosalba Pippa, è una delle voci più iconiche e versatili del panorama musicale italiano contemporaneo. Sale alla ribalta nel 2009 vincendo la categoria "Nuove Proposte" al 59° Festival di Sanremo con il brano "Sincerità", un successo travolgente che la consacra immediatamente grazie a un look eccentrico e una timbrica vocale cristallina.

Nel corso della sua carriera ha saputo evolversi costantemente, passando dalle sonorità retrò degli esordi a interpretazioni più mature e sofisticate. Vanta due vittorie al Festival di Sanremo: dopo il trionfo tra i giovani, conquista il podio più alto nel 2014 con la raffinata "Controvento".',
                'img_url' => 'artists/images/750wJbkyLusvZi222UZBCWHKaMRc3paGNAn0pBql.webp',
                'created_at' => '2026-03-05 20:56:36',
                'updated_at' => '2026-03-05 20:56:36',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Fedez',
                'type' => 'solista',
                'bio' => 'Fedez, pseudonimo di Federico Leonardo Lucia, è uno dei rapper e produttori discografici più influenti e mediatici degli anni 2010 e 2020 in Italia. Partito dal circuito rap underground milanese, ha saputo scalare le classifiche mescolando sapientemente hip-hop e pop, diventando un punto di riferimento per la scena mainstream.

Al Festival di Sanremo ha lasciato il segno nel 2021, partecipando in coppia con Francesca Michielin con il brano "Chiamami per nome", classificandosi al secondo posto e dominando le classifiche di streaming per mesi. Oltre alla musica, Fedez è una figura centrale nell\'imprenditoria digitale e nel sociale, noto per la sua capacità di utilizzare i social media per l\'attivismo e per la creazione di contenuti che spaziano dal podcasting alla televisione. La sua carriera è costellata di certificazioni platino e collaborazioni con i più grandi nomi della musica italiana.',
                'img_url' => 'artists/images/nIgeMqQQNrGaQa41cueHnjK2cWxK1etD9cXPsOlk.webp',
                'created_at' => '2026-03-05 20:57:08',
                'updated_at' => '2026-03-05 21:00:12',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Marco Masini',
                'type' => 'solista',
                'bio' => 'Marco Masini è uno dei cantautori più intensi e rappresentativi della scuola fiorentina e della musica d\'autore italiana degli anni \'90. Caratterizzato da una voce graffiante e da testi diretti, spesso incentrati su tematiche sociali e sentimentali profonde, Masini ha costruito un legame indissolubile con il Festival della canzone italiana.

Il suo percorso sanremese è trionfale: vince nel 1990 tra le "Novità" con "Disperato" e raggiunge la vittoria assoluta nel 2004 con "L\'uomo volante". Dopo una breve pausa dalle scene nei primi anni 2000, è tornato con una maturità artistica rinnovata, continuando a pubblicare album di successo e partecipando nuovamente al Festival in diverse occasioni (come nel 2017 e nel 2020), confermandosi un artista capace di raccontare le fragilità e le rabbie di intere generazioni con una poetica sempre autentica e priva di filtri.',
                    'img_url' => 'artists/images/9FVT3Myrc3qjDU78ENLxSTgGFPJOT4V9ZLUQOFJT.jpg',
                    'created_at' => '2026-03-05 20:57:30',
                    'updated_at' => '2026-03-05 21:01:01',
                ),
                11 => 
                array (
                    'id' => 13,
                    'name' => 'Nayt',
                    'type' => 'solista',
                    'bio' => 'Nayt, pseudonimo di William Mezzanotte, è considerato uno dei rapper più tecnici e riflessivi della scena italiana contemporanea. Dotato di un "flow" straordinario e di una capacità di scrittura che scava nelle pieghe della psicologia umana e della critica sociale, Nayt ha costruito la sua carriera su una coerenza artistica ferrea, lontano dalle logiche puramente commerciali.

Dopo una lunga gavetta iniziata da giovanissimo, ha conquistato critica e pubblico con la serie di album "Raptus" e con lavori più introspettivi come "Mood" e "Doom". La sua musica è un mix di tecnica pura, incastri metrici complessi e una ricerca filosofica che lo rende un unicum nel panorama urban italiano. Al Festival di Sanremo ha fatto la sua apparizione come ospite nelle serate dei duetti, dimostrando come il rap di qualità possa integrarsi perfettamente con il linguaggio del palco più prestigioso d\'Italia.',
                    'img_url' => 'artists/images/pMXpKZYixCmadHCH5RsgTklzMMdxuVjP0stO0kqN.avif',
                    'created_at' => '2026-03-05 20:58:08',
                    'updated_at' => '2026-03-05 21:01:38',
                ),
                12 => 
                array (
                    'id' => 14,
                    'name' => 'Fulminacci',
                    'type' => 'solista',
                'bio' => 'Fulminacci, pseudonimo di Filippo Uttinacci, è il volto della nuova canzone d\'autore romana. Vincitore della Targa Tenco per la miglior Opera Prima nel 2019 con l\'album "La Vita Veramente", è un artista che fonde l\'ironia e la profondità dei grandi cantautori del passato (come Silvestri o Fabi) con una freschezza pop assolutamente moderna.

A Sanremo 2021 ha portato il brano "Santa Marinella", un omaggio alla sua terra e una ballata nostalgica che ha conquistato il pubblico per la sua semplicità e purezza. Fulminacci si distingue per la sua capacità di suonare più strumenti e per una scrittura brillante, capace di trasformare frammenti di vita quotidiana in inni generazionali. È considerato uno degli artisti più talentuosi e "intellettuali" della sua generazione, pur mantenendo una leggerezza e una simpatia che lo rendono estremamente vicino al suo pubblico.',
                'img_url' => 'artists/images/iQTc3MUSF1rQxLRzPnPzpaZ86GqgjadXdBS0gCEh.jpg',
                'created_at' => '2026-03-05 20:58:34',
                'updated_at' => '2026-03-05 21:00:48',
            ),
        ));
        
        
    }
}