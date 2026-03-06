<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('artists')->delete();
        
        DB::table('artists')->insert(array (
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
            13 => 
            array (
                'id' => 15,
                'name' => 'Ermal Meta',
                'type' => 'solista',
                'bio' => 'Ermal Meta è uno dei musicisti e autori più completi e raffinati della musica italiana contemporanea. Di origini albanesi ma naturalizzato italiano, ha iniziato la sua carriera come autore per i più grandi nomi della musica nazionale, per poi intraprendere un percorso solista che lo ha portato rapidamente ai vertici della popolarità.

La sua storia con il Festival di Sanremo è costellata di successi: dopo il terzo posto nel 2017 con "Vietato morire", trionfa nel 2018 in coppia con Fabrizio Moro con "Non mi avete fatto niente", un brano di forte impegno civile che ha rappresentato l\'Italia all\'Eurovision. Ermal Meta si distingue per una tecnica compositiva superiore, una vocalità delicata ma potente e testi di rara profondità poetica, capaci di affrontare temi complessi come il dolore, la resilienza e la speranza con una sensibilità fuori dal comune.',
                'img_url' => 'artists/images/r0LhFBiueOi0xP9tbgSRnvPEwMo4xMugADfNIj9d.avif',
                'created_at' => '2026-03-05 21:12:42',
                'updated_at' => '2026-03-05 21:26:44',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'Serena Brancale',
                'type' => 'solista',
                'bio' => 'Serena Brancale è una polistrumentista, performer e compositrice pugliese dotata di un talento fuori dal comune. La sua musica è un mix esplosivo di soul, jazz, funk e tradizione italiana, il tutto condito da un uso magistrale dell\'elettronica e dei dialetti. Ha partecipato al Festival di Sanremo nel 2015 tra le Nuove Proposte con "Galleggiare", stupendo la critica per la sua tecnica vocale. È considerata una delle musiciste più innovative e internazionali del panorama italiano, capace di trasformare ogni sua esibizione in un viaggio sonoro unico.',
                'img_url' => 'artists/images/mk1gLHhvn4jiPtlxJiHdkfg3zWts3Xgcv994mKwp.webp',
                'created_at' => '2026-03-05 21:12:51',
                'updated_at' => '2026-03-05 23:11:50',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'Tommaso Paradiso',
                'type' => 'solista',
                'bio' => 'Tommaso Paradiso è il principale artefice dell\'estetica "Itpop" in Italia. Ex frontman dei Thegiornalisti, ha cambiato le regole del pop nazionale unendo la nostalgia degli anni \'80 a una scrittura moderna e immediata. Come solista ha continuato a macinare successi, diventando il cantore delle estati italiane e dei sentimenti quotidiani. A Sanremo ha partecipato sia come autore di grandi hit che come ospite, confermandosi un artista capace di scrivere inni generazionali che restano impressi nella cultura popolare.',
                'img_url' => 'artists/images/ZLI7sCKGqJj9jRfmBUKNOUxvBmQGKoRSLmLlKo58.webp',
                'created_at' => '2026-03-05 21:13:03',
                'updated_at' => '2026-03-05 23:12:13',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'LDA',
                'type' => 'solista',
            'bio' => 'LDA, acronimo di Luca D\'Alessio, è uno dei giovani talenti più promettenti della nuova scena pop italiana. Figlio d\'arte (del celebre Gigi D\'Alessio), ha saputo costruire la propria identità artistica con determinazione, distaccandosi dalle etichette e puntando su un pop fresco, moderno e internazionale.
Salito alla ribalta grazie alla partecipazione ad Amici nel 2021, dove ha infranto record di streaming con il brano "Quello che fa male", ha debuttato al Festival di Sanremo nel 2023 con "Se poi domani". La sua musica si distingue per una scrittura romantica e sincera, capace di parlare ai coetanei con semplicità e una sensibilità melodica che dimostra una maturità artistica in continua evoluzione.',
            'img_url' => 'artists/images/XYVr1SnKOgrLJhsD5cwLmIp0ZrMgaTtUZxI7pZIA.jpg',
            'created_at' => '2026-03-05 21:13:14',
            'updated_at' => '2026-03-05 23:02:34',
        ),
        17 => 
        array (
            'id' => 19,
            'name' => 'AKA 7even',
            'type' => 'solista',
            'bio' => 'AKA 7even, pseudonimo di Luca Marzano, è uno dei talenti più brillanti e poliedrici emersi dalla nuova scena pop-urban italiana. Cantautore, produttore e musicista, ha saputo conquistare il grande pubblico grazie a una rara capacità di fondere melodie accattivanti, ritmi contemporanei e una vocalità intensa, capace di spaziare dal rap alle ballate più intime.

Diventato un fenomeno di massa nel 2021 dopo la partecipazione al talent show Amici, ha dominato le classifiche con hit estive come "Loca" e brani profondi come "Mi manchi", ottenendo in breve tempo numerosi dischi di platino. Al Festival di Sanremo 2022 ha debuttato con il brano "Perfetta così", una canzone sull\'accettazione di sé che ne ha confermato la maturità artistica e la capacità di calcare i palchi più prestigiosi d\'Italia. AKA 7even si distingue per la sua dedizione totale alla musica, curando spesso personalmente gli arrangiamenti e dimostrando una versatilità che lo rende uno degli artisti più promettenti della sua generazione.',
            'img_url' => 'artists/images/AUZSaF35r2aEJ1ieTIFCpxdXVXmSNrkdLOepXfKd.avif',
            'created_at' => '2026-03-05 21:13:30',
            'updated_at' => '2026-03-05 21:18:42',
        ),
        18 => 
        array (
            'id' => 20,
            'name' => 'Luchè',
            'type' => 'solista',
            'bio' => 'Luchè, pseudonimo di Luca Imprudente, è uno dei pilastri del rap napoletano e nazionale. Ex membro dello storico gruppo Co\'Sang, ha giocato un ruolo fondamentale nel portare lo street-rap crudo e realistico ai vertici delle classifiche italiane. La sua carriera solista è caratterizzata da un\'evoluzione continua, passando da sonorità puramente hip-hop a sperimentazioni urban-pop di grande respiro internazionale.
Con album come "Potere" e "Dove volano le aquile", Luchè ha dimostrato una capacità di scrittura introspettiva e complessa, raccontando il successo, il riscatto sociale e i sentimenti con una crudezza e una verità che lo rendono un punto di riferimento assoluto per tutta la scena urban, capace di riempire i palazzetti mantenendo intatta la propria credibilità di strada.',
            'img_url' => 'artists/images/Hqw0AzlOume0JCf7H8WmwYC0K4JmYSTmKsryVqb6.avif',
            'created_at' => '2026-03-05 21:13:40',
            'updated_at' => '2026-03-05 23:04:23',
        ),
        19 => 
        array (
            'id' => 21,
            'name' => 'Bambole di pezza',
            'type' => 'band',
            'bio' => 'Le Bambole di Pezza sono una storica band punk rock milanese, nota per la formazione interamente femminile e per il forte impegno sociale e femminista. Nate alla fine degli anni \'90, sono diventate un simbolo del rock alternativo italiano grazie a sonorità ruvide, testi diretti e performance live ad alta energia.

Dopo una pausa dalle scene, la band è tornata nel 2022 con una formazione rinnovata e un sound che mescola il pop-punk moderno a tematiche attuali, mantenendo sempre l\'attitudine ribelle e l\'impegno contro ogni forma di discriminazione e violenza di genere. Sono una delle poche realtà in grado di portare il punk rock femminile nei palchi mainstream, rappresentando un ponte tra la scena underground e il nuovo pop rock italiano.',
            'img_url' => 'artists/images/3kfPibjSDvoBDwH5O9cmmQ1unegvVIlN77o2d9U8.webp',
            'created_at' => '2026-03-05 21:13:53',
            'updated_at' => '2026-03-05 21:20:39',
        ),
        20 => 
        array (
            'id' => 22,
            'name' => 'Levante',
            'type' => 'solista',
            'bio' => 'Levante, pseudonimo di Claudia Lagona, è la "cantantessa" dell\'indie-pop italiano, un\'artista totale che spazia dalla musica alla scrittura di romanzi. Emersa nel 2013 con il successo di "Alfonso", è diventata in breve tempo un\'icona di stile e di sostanza, grazie a una scrittura tagliente, immagini poetiche e una vocalità ricca di sfumature mediterranee.
A Sanremo ha portato la sua energia e il suo impegno civile: nel 2020 con "Tikibombom", un inno alla diversità e all\'inclusione, e nel 2023 con "Vivo", un brano viscerale sul post-partum e sulla riappropriazione del proprio corpo. Levante rappresenta la perfetta sintesi tra il cantautorato colto e il pop contemporaneo, mantenendo sempre un\'estetica ricercata e un messaggio potente.',
            'img_url' => 'artists/images/AtGvWCFJ3UEvbE5pcROZoWH3Wcvs8bYcFmNodgDD.avif',
            'created_at' => '2026-03-05 21:14:02',
            'updated_at' => '2026-03-05 23:03:52',
        ),
        21 => 
        array (
            'id' => 23,
            'name' => 'J-Ax',
            'type' => 'solista',
        'bio' => 'J-Ax, pseudonimo di Alessandro Aleotti, è il "pioniere" del rap in Italia. Fondatore degli Articolo 31 negli anni \'90, ha sdoganato l\'hip-hop nel mainstream italiano, mescolandolo con il pop, il rock e il punk. Dopo lo scioglimento della band, ha costruito una carriera solista monumentale, diventando il volto del "rap\'n\'roll" e dominando le classifiche estive con hit pop-urban e collaborazioni storiche (come il sodalizio con Fedez).
Noto per la sua ironia pungente, il linguaggio diretto e la capacità di analizzare la società italiana con occhio critico e scanzonato, J-Ax è tornato a Sanremo nel 2023 per una reunion storica degli Articolo 31 con il brano "Un bel viaggio", celebrando trent\'anni di carriera e un\'amicizia ritrovata, confermandosi un\'icona transgenerazionale della musica italiana.',
        'img_url' => 'artists/images/SPhMYFfP7bpUgTKRnNoPD8NBcKykTfoPxD7RtoO7.webp',
        'created_at' => '2026-03-05 21:14:11',
        'updated_at' => '2026-03-05 23:01:06',
    ),
    22 => 
    array (
        'id' => 24,
        'name' => 'Tredici Pietro',
        'type' => 'solista',
    'bio' => 'Tredici Pietro, pseudonimo di Pietro Morandi, è un rapper che ha saputo costruirsi un percorso originale e credibile nella scena urban italiana, distaccandosi dall\'importante eredità familiare (è figlio di Gianni Morandi). Con uno stile che mescola ironia, attitudine lo-fi e rime taglienti, Pietro racconta la vita dei ventenni di oggi con onestà e senza filtri. La sua musica è caratterizzata da una ricerca sonora mai banale, posizionandosi come una delle voci più interessanti e "anti-convenzionali" del nuovo rap italiano.',
        'img_url' => 'artists/images/E9uPaJKdapeFJ0Q3RTGCh923MAYP1nfLu671WxQG.jpg',
        'created_at' => '2026-03-05 21:14:22',
        'updated_at' => '2026-03-05 23:12:41',
    ),
    23 => 
    array (
        'id' => 25,
        'name' => 'Samurai Jay',
        'type' => 'solista',
        'bio' => 'Samurai Jay, pseudonimo di Gennaro Amatore, è uno dei protagonisti della nuova ondata urban napoletana. Cresciuto tra le influenze del rap americano e la tradizione melodica della sua terra, ha saputo creare un suono fresco e internazionale. Noto per la sua abilità nei ritornelli killer e per la sua attitudine solare, ha collaborato con i più grandi nomi della scena campana e nazionale, rappresentando il lato più pop e colorato della trap italiana, capace di portare l\'energia della strada verso un pubblico sempre più vasto.',
        'img_url' => 'artists/images/BAl0HR7eYbFK9s7zUojQUkRgjDioJrSISAUDVMjI.avif',
        'created_at' => '2026-03-05 21:14:29',
        'updated_at' => '2026-03-05 23:11:21',
    ),
    24 => 
    array (
        'id' => 26,
        'name' => 'Raf',
        'type' => 'solista',
    'bio' => 'Raf, all\'anagrafe Raffaele Riefoli, è uno dei padri del pop moderno in Italia. Partito con il successo internazionale della italo-disco ("Self Control"), ha saputo evolversi in un cantautore pop raffinato, capace di scrivere alcune delle canzoni d\'amore più belle degli ultimi decenni, come "Infinito" e "Battito Animale". A Sanremo ha trionfato come autore (con "Si può dare di più") e ha partecipato come interprete con brani indimenticabili come "Cosa resterà degli anni \'80" e "Oggi un Dio non ho". È un maestro della melodia e della produzione pop di qualità.',
        'img_url' => 'artists/images/x6vo2WSY35DWKGr6pQr5VWeWYJMwY2OA2tBh5iq5.avif',
        'created_at' => '2026-03-05 21:14:38',
        'updated_at' => '2026-03-05 23:10:52',
    ),
    25 => 
    array (
        'id' => 27,
        'name' => 'Malika Ayane',
        'type' => 'solista',
    'bio' => 'Malika Ayane è una delle interpreti più eleganti e sofisticate della musica italiana. Caratterizzata da una voce dal timbro scuro e vellutato, ha saputo coniugare il pop di alta scuola con influenze jazz e soul. Presenza costante e amatissima al Festival di Sanremo, ha lasciato il segno con brani iconici come "Come foglie" (2009), "Adesso e qui (nostalgico presente)" (2015), che le è valso il Premio della Critica "Mia Martini", e la raffinata "Ti piaci così" (2021). La sua capacità di unire stile, tecnica vocale e profondità interpretativa la rende un\'artista unica nel panorama nazionale.',
        'img_url' => 'artists/images/iCKA4Ti4LtAYWHIrjuNSJYBvZ967YgTMV8gja4yT.avif',
        'created_at' => '2026-03-05 21:14:51',
        'updated_at' => '2026-03-05 23:07:48',
    ),
    26 => 
    array (
        'id' => 28,
        'name' => 'Enrico Nigiotti',
        'type' => 'solista',
        'bio' => 'Enrico Nigiotti è un cantautore livornese che incarna l\'essenza della musica d\'autore genuina e passionale. Dopo un inizio di carriera turbolento ma promettente, ha riconquistato il pubblico e la critica grazie a una maturità artistica sorprendente, passando per esperienze televisive che hanno messo in luce la sua onestà intellettuale e il suo talento con la chitarra.

A Sanremo ha lasciato un segno profondo con brani come "Nonno Hollywood" (2019), vincitore del Premio Lunezia per il valore musical-letterario, e "Baciami adesso" (2020). La sua scrittura è viscerale, spesso legata alle radici, alla famiglia e alla vita quotidiana, rendendolo uno degli artisti più apprezzati per la capacità di emozionare attraverso una voce calda e testi che arrivano dritti al cuore, senza filtri o sovrastrutture.',
            'img_url' => 'artists/images/wdNIHVIHB3pLsCYRHLsftlo5YWEK6VnS9tNE9Y3j.avif',
            'created_at' => '2026-03-05 21:15:01',
            'updated_at' => '2026-03-05 21:25:16',
        ),
        27 => 
        array (
            'id' => 29,
            'name' => 'Maria Antonietta e Colombre',
            'type' => 'duetto',
        'bio' => 'Maria Antonietta (Letizia Cesarini) e Colombre (Giovanni Imparato) rappresentano l\'eccellenza del panorama indie-alternative italiano. Maria Antonietta è una cantautrice dalla scrittura tagliente e viscerale, capace di unire l\'attitudine punk a una poetica colta e raffinata. Colombre è un musicista e produttore delicato, noto per il suo pop solare e malinconico allo stesso tempo. Spesso collaboratori nella vita e nell\'arte, la loro unione creativa rappresenta un ponte tra la canzone d\'autore più pura e le nuove sonorità indipendenti, portando sui palchi (compreso quello di Sanremo nella serata dei duetti) un\'estetica ricercata e autentica.',
            'img_url' => 'artists/images/zuAHbDhF3pY6m2M4TO33XYYMhJuKIvWNcvJAWHcm.webp',
            'created_at' => '2026-03-05 21:15:25',
            'updated_at' => '2026-03-05 23:08:50',
        ),
        28 => 
        array (
            'id' => 30,
            'name' => 'Michele Bravi',
            'type' => 'solista',
        'bio' => 'Michele Bravi è un artista che ha fatto della narrazione emotiva e della resilienza la sua cifra stilistica. Vincitore di X Factor nel 2013, ha vissuto una profonda evoluzione artistica che lo ha portato verso un cantautorato intimista e teatrale. A Sanremo ha incantato il pubblico con "Il diario degli errori" (2017), arrivando al quarto posto, e con la struggente "Inverno dei fiori" (2022). La sua voce calda e la sua capacità di trasformare le fragilità in arte lo rendono uno dei performer più sensibili e seguiti della sua generazione.',
            'img_url' => 'artists/images/EGqCZbTSbWeRsK7SAlaG1SSTZXLXfAJ42nGdBh9O.webp',
            'created_at' => '2026-03-05 21:15:39',
            'updated_at' => '2026-03-05 23:09:28',
        ),
        29 => 
        array (
            'id' => 31,
            'name' => 'Francesco Renga',
            'type' => 'solista',
            'bio' => 'Francesco Renga è una delle voci più potenti e riconoscibili del panorama pop-rock italiano. Ex frontman della band rock Timoria negli anni \'90, ha intrapreso una carriera solista di straordinario successo, caratterizzata da una vocalità imponente e da un repertorio di grandi ballate passionali.
Il suo legame con il Festival di Sanremo è indissolubile: trionfa nel 2005 con la celebre "Angelo", brano dedicato alla figlia che lo consacra definitivamente come uno dei big della musica nazionale. Nel corso degli anni è tornato più volte sul palco dell\'Ariston (come nel 2019 con "Aspetto che torni" e nel 2021 con "Quando trovo te"), confermandosi un interprete capace di unire eleganza tecnica e intensità emotiva, raccontando l\'amore e la vita con una cifra stilistica sempre coerente.',
                'img_url' => 'artists/images/sl0z4vyzmG3aAZI2NbsNy5oTRm0faKIIVvm9Bc3V.jpg',
                'created_at' => '2026-03-05 21:15:46',
                'updated_at' => '2026-03-05 23:00:13',
            ),
            30 => 
            array (
                'id' => 32,
                'name' => 'Patty Pravo',
                'type' => 'solista',
            'bio' => 'Patty Pravo, pseudonimo di Nicoletta Strambelli, è la "Ragazza del Piper", un\'icona assoluta della musica e del costume italiano. Con oltre cinquant\'anni di carriera, ha attraversato generi e stili, rimanendo sempre un simbolo di libertà, eleganza e avanguardia. Detiene il record di partecipazioni al Festival di Sanremo per una donna (dieci volte), regalando capolavori come "E dimmi che non vuoi morire" (1997) e "Per un po\' di pazzia". La sua voce eterea e la sua presenza magnetica l\'hanno resa una vera e propria musa per i più grandi autori italiani.',
                'img_url' => 'artists/images/1c7NA2xzDHjFI710ETtLArKQvh2wFdqXYSsObt8P.webp',
                'created_at' => '2026-03-05 21:15:57',
                'updated_at' => '2026-03-05 23:10:22',
            ),
            31 => 
            array (
                'id' => 33,
                'name' => 'Chiello',
                'type' => 'solista',
                'bio' => 'Chiello, pseudonimo di Rocco Modello, è un artista che ha saputo ridefinire i confini del pop e dell\'indie in Italia. Salito alla ribalta come membro del gruppo trap FSK Satellite, si è poi distinto per una carriera solista sorprendente e introspettiva, culminata con l\'album di successo "Oceano Paradiso" nel 2021.

Il suo stile è un mix unico di influenze che spaziano dal cantautorato italiano al rock psichedelico, caratterizzato da una voce graffiante e testi che esplorano le fragilità umane, l\'amore e l\'esistenzialismo. Al Festival di Sanremo 2024 ha partecipato come ospite nella serata dei duetti, confermando la sua capacità di emozionare un pubblico trasversale e posizionandosi come uno degli artisti più originali e sensibili della sua generazione.',
                'img_url' => 'artists/images/azIoSMzPArQZ9bFW4FyM4SJZRuIxMpbhu16gj6bO.avif',
                'created_at' => '2026-03-05 21:16:03',
                'updated_at' => '2026-03-05 21:21:18',
            ),
            32 => 
            array (
                'id' => 34,
                'name' => 'Elettra Lamborghini',
                'type' => 'solista',
                'bio' => 'Elettra Lamborghini, nota come "The Italian Killer", è una delle figure più carismatiche e influenti dell\'intrattenimento e del pop televisivo italiano. Partita come personaggio di reality show internazionali, ha saputo costruire una solida carriera musicale nel genere urban e reggaeton, portando in Italia sonorità latine con un tocco pop inconfondibile.

Il suo debutto al Festival di Sanremo nel 2020 con il brano "Musica (e il resto scompare)" è diventato un tormentone istantaneo, confermando la sua capacità di catturare l\'attenzione del grande pubblico con ironia, sensualità e una naturale attitudine da performer. Oltre alla musica, Elettra è una seguitissima icona social e un volto televisivo amato per la sua schiettezza e solarità, diventando un punto di riferimento per la Generazione Z.',
                    'img_url' => 'artists/images/FsrtWrTTQqPDwc1LZf9m8HCAphj14gCCB9UCjgTr.webp',
                    'created_at' => '2026-03-05 21:16:22',
                    'updated_at' => '2026-03-05 21:24:12',
                ),
                33 => 
                array (
                    'id' => 35,
                    'name' => 'Dargen D\'Amico',
                    'type' => 'solista',
                'bio' => 'Dargen D\'Amico, all\'anagrafe Jacopo D\'Amico, è uno dei personaggi più eclettici e brillanti della musica italiana. Autodefinitosi "cantautorap", ha iniziato la sua carriera nel rap underground (fondando i Sacre Scuole con Gué Pequeno e Jake La Furia) per poi evolvere verso uno stile unico che mescola elettronica, pop, dance e una scrittura densa di giochi di parole e riflessioni filosofiche.

A Sanremo 2022 ha travolto il pubblico con "Dove si balla", una hit che nascondeva un\'amara riflessione post-pandemica sotto un ritmo dance irresistibile. È tornato nel 2024 con "Onda Alta", un brano di forte impatto sociale sulla crisi dei migranti. Noto per i suoi inseparabili occhiali da sole e per la sua ironia pungente, Dargen è considerato uno degli autori più fini del panorama contemporaneo, capace di scrivere testi per i più grandi nomi della musica italiana pur mantenendo una propria identità inconfondibile.',
                'img_url' => 'artists/images/rgeGz9eLXZFrWn6tIvv6DlLSpTGmOkJkokupZbpx.jpg',
                'created_at' => '2026-03-05 21:16:35',
                'updated_at' => '2026-03-05 21:21:53',
            ),
            34 => 
            array (
                'id' => 36,
                'name' => 'Leo Gassmann',
                'type' => 'solista',
            'bio' => 'Leo Gassmann è un cantautore che unisce una solida preparazione musicale a una sensibilità d\'altri tempi. Figlio e nipote d\'arte (di Alessandro e Vittorio Gassmann), ha scelto la strada della musica per esprimere la propria urgenza creativa, dimostrando un talento cristallino e una voce calda e profonda.
Vincitore della categoria "Nuove Proposte" a Sanremo 2020 con il brano "Vai bene così", è tornato tra i Big nel 2023 con "Terzo Cuore", brano scritto insieme a Riccardo Zanotti dei Pinguini Tattici Nucleari. La sua proposta artistica fonde il pop d\'autore con influenze rock e folk, mettendo sempre al centro testi riflessivi che esplorano l\'accettazione di sé, la resilienza e le sfide della sua generazione.',
            'img_url' => 'artists/images/QDqtwvSiEWnETpZfE7n5gIQ674UO6JY6fu7kZXqW.jpg',
            'created_at' => '2026-03-05 21:16:46',
            'updated_at' => '2026-03-05 23:03:18',
        ),
        35 => 
        array (
            'id' => 37,
            'name' => 'Mara Sattei',
            'type' => 'solista',
        'bio' => 'Mara Sattei, pseudonimo di Maria Sara Mattei, è una delle voci più interessanti della nuova scena pop-urban italiana. Dopo una prima esperienza televisiva, ha trovato la sua vera identità artistica grazie alla collaborazione con il fratello (il produttore thasup), distinguendosi per una scrittura fresca e una vocalità versatile. Nel 2023 ha debuttato al Festival di Sanremo con "Duemilaminuti", un brano intenso scritto da Damiano David dei Måneskin, che ne ha consacrato il talento anche presso il grande pubblico. È nota per la sua capacità di spaziare tra ritmiche contemporanee e ballate pop emotive.',
            'img_url' => 'artists/images/2owepUIaeQRVBbBUa1TFbUIYzUVhKCisvthSKjLM.webp',
            'created_at' => '2026-03-05 21:16:56',
            'updated_at' => '2026-03-05 23:08:15',
        ),
        36 => 
        array (
            'id' => 38,
            'name' => 'Eddie Brock',
            'type' => 'solista',
        'bio' => 'Eddie Brock è un nome che nel panorama contemporaneo evoca immediatamente l\'immaginario dei grandi "antieroi". Sebbene noto universalmente come l\'ospite umano del simbionte Venom nei fumetti e al cinema, la sua figura rappresenta nel database un elemento di rottura, simboleggiando il legame tra la cultura pop internazionale e l\'intrattenimento multimediale. La sua inclusione in un archivio dedicato alla musica e allo spettacolo sottolinea l\'interconnessione tra le colonne sonore cinematografiche di grande impatto (come quelle che accompagnano le sue pellicole) e l\'evoluzione del linguaggio cross-mediale moderno.',
            'img_url' => 'artists/images/2CRS00zot0MG7pnQAT8V6YnWi0ApO4kLcJFH08UP.webp',
            'created_at' => '2026-03-05 21:17:11',
            'updated_at' => '2026-03-05 21:23:34',
        ),
        37 => 
        array (
            'id' => 39,
            'name' => 'Simone Cristicchi',
            'type' => 'solista',
            'bio' => 'Artista poliedrico, cantautore, attore teatrale e scrittore, Cristicchi è un "osservatore di anime" che utilizza la musica per indagare il sociale e l\'esistenziale. Celebre per la sua capacità di emozionare attraverso la narrazione della fragilità umana e della spiritualità, le sue composizioni sono spesso vere e proprie poesie in musica, cariche di una profondità civile e umana rarissima.',
            'img_url' => 'artists/images/ql87GhLeDS8YZuFapiLv5vgcy71N51K19aN0s56r.jpg',
            'created_at' => '2026-03-06 01:14:59',
            'updated_at' => '2026-03-06 01:45:25',
        ),
        38 => 
        array (
            'id' => 40,
            'name' => 'Giorgia',
            'type' => 'solista',
            'bio' => 'Considerata una delle voci più grandi e tecniche della storia della musica italiana, Giorgia Todrani incarna l\'eleganza del soul e dell\'R&B applicata alla melodia mediterranea. Con un\'estensione vocale prodigiosa e una carriera costellata di successi senza tempo, ha saputo evolversi rimanendo sempre fedele a una qualità interpretativa che rasenta la perfezione.',
            'img_url' => 'artists/images/J30mSBj2190VBYgcGJXLzcK9fB1coHA9dRPPZi6c.jpg',
            'created_at' => '2026-03-06 01:15:07',
            'updated_at' => '2026-03-06 01:38:35',
        ),
        39 => 
        array (
            'id' => 41,
            'name' => 'Achille Lauro',
            'type' => 'solista',
            'bio' => 'Icona della metamorfosi artistica contemporanea, ha saputo scardinare i confini tra generi fondendo trap, punk rock e glam. Celebre per le sue performance teatrali e i quadri concettuali portati sul palco di Sanremo, Lauro utilizza la musica come un veicolo narrativo per esplorare l\'estetica dell\'eccesso e la libertà d\'espressione, diventando un punto di riferimento per l\'avanguardia pop italiana.',
            'img_url' => 'artists/images/4gGDxqQ82Cht3AkrkZ6tyzRQRcauFIMiGpzYrM94.webp',
            'created_at' => '2026-03-06 01:15:16',
            'updated_at' => '2026-03-06 01:31:37',
        ),
        40 => 
        array (
            'id' => 42,
            'name' => 'Francesco Gabbani',
            'type' => 'solista',
            'bio' => 'Dotato di una rara capacità di coniugare il divertimento alla riflessione filosofica, Francesco Gabbani ha ridefinito il concetto di "tormentone" intelligente. Le sue melodie trascinanti nascondono spesso testi acuti che analizzano i vizi e le virtù della società contemporanea, portando sul palco un\'energia positiva e un\'ironia colta che lo rendono unico nel panorama della musica leggera.',
            'img_url' => 'artists/images/Q5Mn9ZWTVxSilCRFVS4XSIAqJGGLiR71qkxsWo9p.webp',
            'created_at' => '2026-03-06 01:15:28',
            'updated_at' => '2026-03-06 01:36:45',
        ),
        41 => 
        array (
            'id' => 43,
            'name' => 'Irama',
            'type' => 'solista',
            'bio' => 'Filippo Maria Fanti, in arte Irama, è un artista capace di una metamorfosi costante: partito dal rap, è diventato uno dei cantautori pop più amati, alternando ballad orchestrali strazianti a hit esteticamente ricercate con influenze latine e gipsy. La sua forza risiede in una vocalità graffiante e in una capacità narrativa che tocca corde emotive profonde.',
            'img_url' => 'artists/images/3N2bgYiWxYdheWjoITF6rOtcEfUq4hkYy1Ea4Q1S.webp',
            'created_at' => '2026-03-06 01:15:36',
            'updated_at' => '2026-03-06 01:39:01',
        ),
        42 => 
        array (
            'id' => 44,
            'name' => 'Coma_cose',
            'type' => 'duetto',
            'bio' => 'Il duo composto da Fausto Lama e California rappresenta una delle collaborazioni più iconiche della scena indie-pop italiana. La loro cifra stilistica risiede in un uso magistrale del linguaggio, fatto di giochi di parole, citazionismo urbano e atmosfere che richiamano i grandi cantautori del passato, il tutto avvolto in un\'estetica visiva e sonora che celebra l\'amore e la complicità quotidiana.',
            'img_url' => 'artists/images/xZTLoFlJMLhSr9joclsfBRcLxsTmXa7laDJ8YKps.webp',
            'created_at' => '2026-03-06 01:15:46',
            'updated_at' => '2026-03-06 01:32:58',
        ),
        43 => 
        array (
            'id' => 45,
            'name' => 'Bresh',
            'type' => 'solista',
        'bio' => 'Tra i nomi di spicco della nuova scuola genovese, Andrea Brasi (in arte Bresh) si distingue per una scrittura che mescola sapientemente l\'attitudine urban a una sensibilità cantautorale malinconica e marina. I suoi testi, ricchi di riferimenti alla quotidianità e alla propria terra, tracciano il profilo di un artista capace di raccontare le fragilità generazionali con un flow magnetico e un\'autenticità disarmante.',
            'img_url' => 'artists/images/1tksny4t7GUPER6pAAPTD7TECePYBt3ZxJRooJUJ.webp',
            'created_at' => '2026-03-06 01:15:53',
            'updated_at' => '2026-03-06 01:32:02',
        ),
        44 => 
        array (
            'id' => 46,
            'name' => 'Elodie',
            'type' => 'solista',
            'bio' => 'Partita dalle periferie romane e arrivata a dominare le vette delle classifiche, Elodie è oggi la regina del pop sofisticato e del clubbing d\'autore. Capace di unire una vocalità calda e graffiante a una presenza scenica magnetica, ha saputo evolvere il suo sound verso sonorità internazionali, diventando un simbolo di emancipazione, stile e versatilità artistica.',
            'img_url' => 'artists/images/YIWocb4E0PRTsZrFYPgPht3HBxiyW49DVOQOa62L.webp',
            'created_at' => '2026-03-06 01:15:59',
            'updated_at' => '2026-03-06 01:34:06',
        ),
        45 => 
        array (
            'id' => 47,
            'name' => 'Noemi',
            'type' => 'solista',
            'bio' => 'Caratterizzata da un timbro "black", graffiante e sabbioso, Noemi è una delle interpreti più carismatiche emerse dai talent. Nel corso degli anni ha saputo spaziare con naturalezza tra blues, soul e pop d\'autore, collaborando con i più grandi nomi della musica italiana e confermandosi un\'artista dalla sensibilità rara e dalla presenza scenica solida e solare.',
            'img_url' => 'artists/images/pUftRhZNCbndizrv1MRvsPuRJMRKfxiVymjsKpBm.webp',
            'created_at' => '2026-03-06 01:16:07',
            'updated_at' => '2026-03-06 01:42:17',
        ),
        46 => 
        array (
            'id' => 48,
            'name' => 'The Kolors',
            'type' => 'band',
            'bio' => 'Guidati dal carisma di Stash, i The Kolors sono i maestri indiscussi del funk-pop contemporaneo in Italia. Con un\'estetica che strizza l\'occhio agli anni \'80 e un sound caratterizzato da synth brillanti e groove travolgenti, la band ha saputo trasformare ogni uscita in un tormentone generazionale, portando una ventata di internazionalità e ritmo in ogni loro performance.',
            'img_url' => 'artists/images/xiLGSnxscfmeo66ij8dGYdgEhb6Q6RXGVuwsdJw2.jpg',
            'created_at' => '2026-03-06 01:16:18',
            'updated_at' => '2026-03-06 01:46:27',
        ),
        47 => 
        array (
            'id' => 49,
            'name' => 'Rocco Hunt',
            'type' => 'solista',
            'bio' => 'Il "Poeta Urbano" di Salerno ha saputo trasformare il dialetto napoletano in un linguaggio pop universale. Dopo aver vinto Sanremo Giovani con un rap di denuncia sociale, ha scalato le classifiche europee diventando il re dei ritmi solari e delle collaborazioni internazionali, portando sempre con sé l\'orgoglio delle proprie radici e un\'allegria contagiosa.',
            'img_url' => 'artists/images/oqqVfpkLPeVJEb0U784ySZ4xHVrXdRmsM5NBkr21.jpg',
            'created_at' => '2026-03-06 01:16:30',
            'updated_at' => '2026-03-06 01:43:17',
        ),
        48 => 
        array (
            'id' => 50,
            'name' => 'Willie Peyote',
            'type' => 'solista',
            'bio' => 'Il "nichilista colto" del rap italiano, Willie Peyote mescola l\'ironia tagliente alla critica sociale in un mix unico di hip-hop, funk e jazz. Le sue canzoni sono analisi lucide e spietate della società moderna, scritte con un\'intelligenza e un cinismo che spingono l\'ascoltatore alla riflessione, rendendolo uno dei cantautori più originali e necessari del momento.',
            'img_url' => 'artists/images/5dhrqQqwlZZOUXZrOZ22CLdhwFshHFtWq8vZ85tF.jpg',
            'created_at' => '2026-03-06 01:16:41',
            'updated_at' => '2026-03-06 01:47:35',
        ),
        49 => 
        array (
            'id' => 51,
            'name' => 'Sarah Toscano',
            'type' => 'solista',
            'bio' => 'Vincitrice di Amici, Sarah incarna la freschezza e la determinazione della Gen Z. Con una voce pulita e una versatilità che le permette di spaziare dal pop melodico alle hit ritmate da classifica, si è imposta come una delle nuove promesse del panorama nazionale, puntando tutto su una genuinità artistica che conquista al primo ascolto.',
            'img_url' => 'artists/images/JVXifc12DSlVTE2YvtozH1YvxnKq4L03Z6GkOI2v.webp',
            'created_at' => '2026-03-06 01:16:52',
            'updated_at' => '2026-03-06 01:44:23',
        ),
        50 => 
        array (
            'id' => 52,
            'name' => 'Shablo con Guè, Joshua e Tormento',
            'type' => 'band',
            'bio' => 'Un vero e proprio "dream team" transgenerazionale guidato dalla visione di Shablo, l\'architetto del suono urban in Italia. La classe immortale e il flow di Guè si intrecciano con la storia del rap italiano rappresentata da Tormento e la freschezza vocale di Joshua, creando un ponte perfetto tra le radici dell\'hip-hop e le nuove frontiere del genere in un mix di tecnica, stile e anima.',
            'img_url' => 'artists/images/qO05BB1WHRzhcuIvLf7BSzTca1TaLEE2opIykI6f.webp',
            'created_at' => '2026-03-06 01:17:55',
            'updated_at' => '2026-03-06 01:44:51',
        ),
        51 => 
        array (
            'id' => 53,
            'name' => 'Rose Villain',
            'type' => 'solista',
            'bio' => 'Vera e propria "bad girl" del pop italiano con un respiro internazionale, Rose Villain fonde l\'estetica dark e cinematografica a sonorità urban e digitali. Cresciuta musicalmente a New York, ha portato in Italia una scrittura tagliente e un\'attitudine rock’n’roll, diventando in breve tempo l\'icona di un pop esplosivo, colorato e maledettamente magnetico.',
            'img_url' => 'artists/images/Ke5yWRRoRXlNUDDTBix3akzmSFZnLUhCwAiyCeJ8.jpg',
            'created_at' => '2026-03-06 01:18:06',
            'updated_at' => '2026-03-06 01:43:54',
        ),
        52 => 
        array (
            'id' => 54,
            'name' => 'Joan Thiele',
            'type' => 'solista',
            'bio' => 'Perla rara della scena indipendente e urban-pop, Joan Thiele è una polistrumentista e produttrice che fa della ricerca sonora il suo marchio di fabbrica. Le sue origini metà italiane e metà colombiane si riflettono in composizioni sofisticate, dove l\'elettronica incontra il vintage e il soul, creando un\'estetica sonora cinematografica e sospesa nel tempo.',
            'img_url' => 'artists/images/Qdtr02TDnQ7Mt4JJzPHQXXhNjzTxY1sQRV9sRkEI.webp',
            'created_at' => '2026-03-06 01:18:16',
            'updated_at' => '2026-03-06 01:39:27',
        ),
        53 => 
        array (
            'id' => 55,
            'name' => 'Francesca Michielin',
            'type' => 'solista',
            'bio' => 'Polistrumentista, cantautrice e direttrice d\'orchestra, Francesca Michielin è una delle artiste più complete e colte del panorama nazionale. La sua carriera è un percorso di costante sperimentazione, dove il pop incontra influenze alternative e indie, il tutto guidato da una sensibilità ecologista e sociale che traspare in composizioni mai banali e sempre ricche di sfumature.',
            'img_url' => 'artists/images/DUq7i7tAGfUdjuXHOVOsghME4qxt8InOhPllo8kM.webp',
            'created_at' => '2026-03-06 01:18:27',
            'updated_at' => '2026-03-06 01:36:02',
        ),
        54 => 
        array (
            'id' => 56,
            'name' => 'Modà',
            'type' => 'band',
            'bio' => 'Guidati dal carismatico Kekko Silvestre, i Modà hanno ridefinito il pop-rock romantico in Italia. Celebri per le loro melodie epiche, i testi passionali e le sonorità cariche di pathos, hanno riempito gli stadi raccontando l\'amore, il dolore e la rinascita con un linguaggio diretto che ha creato un legame indissolubile con il loro vastissimo pubblico.',
            'img_url' => 'artists/images/r9SViZxemXuNiz9LjE8wvSoNEGLJEHTuftq7jLNO.jpg',
            'created_at' => '2026-03-06 01:18:36',
            'updated_at' => '2026-03-06 01:41:52',
        ),
        55 => 
        array (
            'id' => 57,
            'name' => 'Massimo Ranieri',
            'type' => 'solista',
            'bio' => 'Gigante dello spettacolo italiano, Massimo Ranieri è l\'artista totale: cantante, attore e showman. Con una carriera che attraversa più di mezzo secolo, ha portato la canzone napoletana e il pop d\'autore nei più grandi teatri del mondo, mantenendo una potenza vocale e un\'energia atletica sul palco che continuano a incantare generazioni intere.',
            'img_url' => 'artists/images/7hRhZD85Wz75sb8qcIrb8plTFDbmJQHWvOWsqSzp.jpg',
            'created_at' => '2026-03-06 01:18:46',
            'updated_at' => '2026-03-06 01:40:39',
        ),
        56 => 
        array (
            'id' => 58,
            'name' => 'Tony Effe',
            'type' => 'solista',
            'bio' => 'Figura centrale della trap italiana e icona di stile, Tony Effe rappresenta l\'attitudine cruda e il lusso della strada. Con un timbro vocale inconfondibile e un\'estetica provocatoria, ha scalato le classifiche portando un immaginario fatto di eccessi, punchline memorabili e una sicurezza nei propri mezzi che lo ha reso uno dei personaggi più discussi e influenti della scena urban.',
            'img_url' => 'artists/images/qdshPvc9rzvROMOLc1psYw0093PjMkjAfUFBWB2z.avif',
            'created_at' => '2026-03-06 01:18:58',
            'updated_at' => '2026-03-06 01:46:49',
        ),
        57 => 
        array (
            'id' => 59,
            'name' => 'Gaia',
            'type' => 'solista',
            'bio' => 'Vincitrice di Amici e icona del pop multiculturale, Gaia Gozzi fonde le sue radici italo-brasiliane in un sound ipnotico che mescola elettropop, bossa nova e urban. La sua scrittura, spesso bilingue, viaggia tra atmosfere solari e ritmi tribali, portando nel panorama italiano una ventata di internazionalità e una grazia vocale fuori dal comune.',
            'img_url' => 'artists/images/aMUQk7y0WqY1QvtpYnYGTWLZ169x3ZOchMpb2Qw7.webp',
            'created_at' => '2026-03-06 01:19:05',
            'updated_at' => '2026-03-06 01:37:15',
        ),
        58 => 
        array (
            'id' => 60,
            'name' => 'Clara',
            'type' => 'solista',
            'bio' => 'Emersa con forza grazie alla serie cult Mare Fuori, Clara Soccini ha rapidamente dimostrato di essere una realtà musicale solida oltre lo schermo. La sua voce, capace di graffiare e cullare allo stesso tempo, si muove su produzioni pop moderne e ricercate, dove il racconto personale e l\'introspezione emotiva diventano il baricentro di una carriera in ascesa verticale.',
            'img_url' => 'artists/images/pTduKw05qrAiSUSECrS6wAkL9gVti30A4KdLAA9V.webp',
            'created_at' => '2026-03-06 01:19:12',
            'updated_at' => '2026-03-06 01:32:27',
        ),
        59 => 
        array (
            'id' => 61,
            'name' => 'Rkomi',
            'type' => 'solista',
            'bio' => 'Partito dalle strade di Calvairate come uno dei rapper più tecnici della sua generazione, Mirko Martorana ha compiuto una rivoluzione artistica incredibile, approdando a un sound che mescola rock, indie e pop. Il suo stile poetico e frammentato, unito a una costante sperimentazione musicale, lo ha reso uno dei profili più originali e di successo della musica contemporanea.',
            'img_url' => 'artists/images/RozzTAKOT362ywTY3d5MEzf2l7x4S1vAgdutUH8x.jpg',
            'created_at' => '2026-03-06 01:19:18',
            'updated_at' => '2026-03-06 01:42:47',
        ),
        60 => 
        array (
            'id' => 62,
            'name' => 'Marcella Bella',
            'type' => 'solista',
            'bio' => 'Vera e propria "leonessa" della canzone italiana, Marcella Bella ha segnato decenni di musica con il suo timbro inconfondibile e la sua grinta interpretativa. Protagonista assoluta delle estati e dei Sanremo degli anni \'70 e \'80, rappresenta il legame perfetto tra la tradizione melodica siciliana e il pop orchestrale più raffinato e passionale.',
            'img_url' => 'artists/images/HLMIszkmVp5y77Qh7GRpLbKI0xTMtw0a0DrOX1Qj.avif',
            'created_at' => '2026-03-06 01:19:26',
            'updated_at' => '2026-03-06 01:40:06',
        ),
    ));
        
        
    }
}