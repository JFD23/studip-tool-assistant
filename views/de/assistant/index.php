<div class="assistant-container">
    <section class="assistant-section">
        <h1>
            Zum Einstieg
        </h1>

        <div class="accordion">
            <h1>
                Teilnehmende benachrichtigen
                (Stud.IP: Nachrichten)
            </h1>
            <div class="accordion_content">

                <p>Über Stud.IP-Nachrichten können Sie allen eingetragenen Kurs-Teilnehmenden Informationen zukommen lassen.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/mail_info/example') ?>" data-dialog="size=640x400;title='Online-Lehre: Teilnehmende benachrichtigen'">Beispiel</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/mail_info/howto') ?>" data-dialog="size=640x600;title='Online-Lehre: Teilnehmende benachrichtigen'">So geht's</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/mail_info/tips') ?>" data-dialog="size=640x600;title='Online-Lehre: Teilnehmende benachrichtigen'">Tipps und Tricks</a>
                    </li>
                </ul>
                <br>
                  <div style="float:left;">
                    <?= Studip\LinkButton::create(_('Rundmail schreiben'),
                        URLHelper::getURL('dispatch.php/messages/write', [
                            'course_id'       => $course_id,
                            'default_subject' => sprintf('[%s]', Context::get()->Name),
                            'filter'          => 'all',
                            'emailrequest'    => 1
                        ]), ['data-dialog' => '', 'data-action' => 'messages/write_all']) ?>
                  </div>
              </div>
            <h1>
                Materialien online bereitstellen
                (Stud.IP: Dateien)
            </h1>
            <div class="accordion_content">

                <p> Im Stud.IP-Dateibereich können Dateien hochgeladen und verlinkt werden. Mit dem "Courseware"-Modul können Sie verschiedene Medien zusammenführen (s. "Materialien zusammenstellen"). </p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/files_info/example') ?>" data-dialog="size=640x400;title='Online-Lehre: Material onloine bereitstellen'">Beispiel</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/files_info/howto') ?>" data-dialog="size=640x600;title='Online-Lehre: Material onloine bereitstellen'">So geht's</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/files_info/tips') ?>" data-dialog="size=640x400;title='Online-Lehre: Material onloine bereitstellen'">Tipps und Tricks</a>
                    </li>
                </ul>
                <div style="float:left;">
              <?= Studip\LinkButton::create(_('Datei hochladen'), '#', ['onclick' => "STUDIP.Files.openAddFilesWindow('$folder_id')", 'data-action' => 'files/upload']) ?>
            </div>
            </div>

            <h1>
                Corona-Infoseite einrichten
                (Stud.IP: Informationen)</em>
            </h1>
            <div class="accordion_content">
                <p>Informieren Sie Ihre Teilnehmenden gut sichtbar darüber, wie Ihr Kurs in diesem Semester abläuft.</p>
                <p>Wir haben eine Vorlage für das Stud.IP-Modul "Informationen" erstellt, mit der Sie die wichtigsten Informationen und Fragen strukturiert hinterlegen können.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/corona_info/howto') ?>" data-dialog="size=640x600">So geht's</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/corona_info/tips') ?>" data-dialog="size=640x400">Tipps und Tricks</a>
                    </li>
                </ul>
                <div style="float:left;">
                <?= Studip\LinkButton::create(_('Corona-Infoseite einrichten'), $controller->url_for('assistant/corona')) ?>
                </div>
            </div>

            <h1>
                Gute Lehre ohne Präsenz!?</em>
            </h1>
            <div class="accordion_content">

                <p>Wir haben einige didaktische Hinweise und Anregungen zusammengetragen, damit Sie Ihre Lehre möglichst gut an die aktuellen Gegebenheiten anpassen
                    und den erhöhten Anforderungen an Selbstlernkompetenzen der Studierenden Rechnung tragen können. </p>
                <div style="float:left;">
                <?= Studip\LinkButton::create(_('Hinweise zur Didaktik'), 'https://www.hs-wismar.de/hochschule/einrichtungen/e-learning-zentrum/lehre-weiterentwickeln/', ['target' => '_blank', 'data-action' => 'tips/gute_lehre']) ?>
                <!--<ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/corona_info/howto') ?>" data-dialog="size=640x600">So geht's') ?></a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/corona_info/tips') ?>" data-dialog="size=640x400">Tipps und Tricks') ?></a>
                    </li>
                </ul>-->
            </div>
          </div>
    </section>

    <section class="assistant-section">
        <h1>
            Hybrid-Lehre: Einstieg
        </h1>

        <div class="accordion">

            <h1>
                Herausforderungen der Hybriden Lehre
            </h1>
            <div class="accordion_content">
                <p>In der Hybriden Lehre werden Elemente der Online Lehre mit Elementen der Präsenzlehre kombiniert.
                    Je nach Szenarion geschieht dieses ggf. sogar zeitgleich.
                    Neben technischen Besonderheiten gibt es einige inhaltliche Faktoren zu beachten.
                    Wir haben Ihnen ein paar Tipps und Hinweise zusammengestellt, um Ihnen den Einstieg zu erleichtern:</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/hybrid_info/different_groups') ?>" data-dialog="size=640x400;title='Unterschiedliche Zuhörendengruppen'">Unterschiedliche Zuhörendengruppen einbeziehen</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/hybrid_info/attention') ?>" data-dialog="size=640x600;title='Aufnahmefähigkeit'">Reduzierte Aufnahmefähigkeit im digitalen Kanal beachten</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/hybrid_info/burden') ?>" data-dialog="size=640x600;title='Teilnehmende gleichmäßig belasten'">Präsenz- und Online-Teilnehmende gleichmäßig belasten</a>
                    </li>
                </ul>
            </div>


            <h1>
                Umsetzungsvarianten
            </h1>
            <div class="accordion_content">
                <p>Um die Tatsache, dass nicht alle Teilnehmenden gleichzeitig vor Ort anwesend sein können,
                    zu kompensieren, bieten sich verschiedene Varianten an:</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/szenarien_info/live') ?>" data-dialog="size=640x400;title='Asynchrone Variante mit Aufzeichnung'">Asynchrone Variante mit Aufzeichnung</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/szenarien_info/interactive') ?>" data-dialog="size=640x600;title='Synchrone Varianten mit Bigblue Button oder Streaming'">Synchrone Varianten mit Bigblue Button oder Streaming</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/szenarien_info/asynchron') ?>" data-dialog="size=640x600;title='Rotierende Gruppen'">Rotierende Gruppen</a>
                    </li>
                </ul>
                <p>Eine umfangreiche Darstellung der Szenarien, sowie detaillierte erklärende Videos und weiterführende Hinweise finden Sie auf unserer Homepage <a href="https://www.virtuos.uni-osnabrueck.de/digitale_lehre/hybrid_semester_informationen_fuer_lehrende.html" target="_blank">
                        Hybrid-Semester: Informationen für Lehrende</a>
                </p>

            </div>

            <h1>
                Vorbereitung
            </h1>
            <div class="accordion_content">
                <p>Hier finden Sie in kurzen Stichworten einige Punkte, an die Sie denken sollten. In einem einstündigen Vortrag stellen wir neben
                den verschiedenen Durchführungsvarianten auch die technischen und organisatorischen Besonderheiten dar: 
                <a href="https://video4.virtuos.uni-osnabrueck.de/paella/ui/watch.html?cid=cf1b359a6eef479105a7f9e79a1f6ba7&id=627448d6-980a-4940-b939-ae14104bde81" target="_blank">Video ansehen</a>
                </p>

                <ul>
                    <li>Szenario wählen und ggf. Technik beschaffen</li>
                    <li>Technik vorab testen</li>
                    <li>Internet im Hörsaal: MAC-Adresse vom IT Beauftragten eintragen lassen</li>
                    <li>Vergabe von Sitzplätzen an Studierende planen</li>
                    <li>Studierende informieren</li>
                </ul>
                <p>In den kommenden Wochen bietet das virtUOS regelmäßig Sprechstunden zum hybriden Semester an. Termine finden Sie in Stud.IP und auf unserer <a href="https://www.virtuos.uni-osnabrueck.de/zentrum_fuer_digitale_lehre_campus_management_und_hochschuldidaktik.html" target="_blank">Webseite</a>.</p>
                <p>Für organisatorische Details zum Hygienekonzept und zur Raumnutzung wenden Sie sich ggf. an Ihren Fachbereich.</p>
            </div>

        </div>
    </section>

    <section class="assistant-section">
        <h1>
            Online-Vorträge (z.B. für Vorlesungen)
        </h1>

       <div class="accordion">
          <!--  <h1>
                Aufzeichnungen im Hörsaal ohne Publikum
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Anfrage stellen'),
                    URLHelper::getURL('dispatch.php/messages/write',
                        ['rec_uname' => 'elz@studip',
                        'default_subject' => _('Anfrage Hörsaalaufzeichnung für '.Context::get()->Name),
                        'default_body' => _('Liebes ELZ-Team,
ich möchte im Hörsaal H1/R131 aufzeichnen.

Mein Terminwunsch: (Datum/Wochentag, Uhrzeit, einmalig/regelmäßig)

Veranstaltung: '.Context::get()->Name.' ('.$course_id.')

Telefonnummer für Rückfragen:

')]),
                    ['data-dialog' => '', 'data-action' => 'messages/write']) ?>
                <p>Die Hörsäle der Universität können für Vorlesungen ohne Publikum genutzt werden. Über 20 Räume sind
                für vollautomatische Videoaufzeichnungen ausgerüstet, Sie müssen nur eine Zeit buchen.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/lecturehall_info/example') ?>" data-dialog="size=640x675">Beispiel</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/lecturehall_info/howto') ?>" data-dialog="size=640x650">So geht's</a>
                    </li>
                </ul>
            </div>
-->
            <h1>
                Aufzeichnung im Studio
            </h1>
            <div class="accordion_content">
                <p>
                    Die Hochschule Wismar betreibt das <b>PELA</b> Videostudio im ITSMZ Raum 104.
                    Hier können mit Unterstützung und Einweisung durch MitarbeiterInnen des E-Learning-Zentrums Videos in überdurchschnittlicher
                    Qualität produziert werden.
                </p>
                <ul>
                    <li><a href="<?= $controller->link_for('assistant/studio_info/selfrecording') ?>" data-dialog="size=640x500">Produktionsbeispiele aus dem <b>PELA</b></a></li>
                </ul>
                <div style="float:left;">
                <?= Studip\LinkButton::create(_('Buchung und Informationen'),
                    'https://www.hs-wismar.de/hochschule/einrichtungen/e-learning-zentrum/produktionsstudio-pela/',
                    ["target"=>"_blank", 'data-action' => 'tips/covid']) ?>
                  </div>
              <!--  <p>
                    Bitte kontaktieren Sie uns mit einer E-Mail an
                    <a href="mailto:elearning@hs-wismar.de">elearning@hs-wismar.de</a>.
                </p> -->
            </div>

            <h1>
                Podcasts und Videos selbst aufzeichnen
            </h1>
            <div class="accordion_content">

                <p>Sie möchten Audio- und Video-Aufnahmen am eigenen Rechner erstellen und den Teilnehmenden
                zur Verfügung stellen? Dafür gibt es verschiedene Werkzeuge:</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/recording_info/opencaststudio') ?>" data-dialog="size=640x600">Opencast Studio (Unsere Empfehlung!)</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/recording_info/powerpoint') ?>" data-dialog="size=640x500">Aufnahmen direkt in Powerpoint</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/recording_info/tips') ?>" data-dialog="size=640x500">Tipps und Tricks</a>
                    </li>
                </ul>
                  <div style="float:left;">
                  <?= Studip\LinkButton::create(_('Kurs dafür einrichten'), $controller->url_for('opencast_plugin')) ?>
                </div>
            </div>
        </div>
    </section>

    <section class="assistant-section">
        <h1>
            Lehrmaterialien verwenden
        </h1>

        <div class="accordion">
            <h1>
                OER-Portale zum Tauschen freier Materialien
            </h1>
            <div class="accordion_content">
                <!--<?= Studip\LinkButton::create(_('OER-Portal Niedersachsen'), 'https://www.oernds.de', ['target'=>'_blank', 'data-action' => 'tips/oer']) ?>-->
                <p>Open Educational Ressources sind Materialien, die von Lehrenden frei zur Verfügung gestellt werden: frei zur Nutzung, aber auch zur Weiterbearbeitung.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/oer_info/example') ?>" data-dialog="size=850x630">Links und Portale</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/oer_info/howto') ?>" data-dialog="size=640x550">Erklärvideo CreativeCommons</a>
                    </li>
                    <li>
                        <a href="https://www.hs-wismar.de/hochschule/einrichtungen/e-learning-zentrum/medienrecht-in-der-lehre/freie-materialien/" class="link-extern" target="_blank">Mehr Infos auf den Seiten des E-Learning-Zentrums</a>
                    </li>
                </ul>
            </div>

            <h1>
                Materialien zusammenstellen (Stud.IP: Courseware)
            </h1>
            <div class="accordion_content">
                <p>Mit dem Stud.IP-Plugin "Courseware" können Sie vielfältige Quellen zusammenführen und ganz einfach interaktive Lernmodule erstellen.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/courseware_info/example') ?>" data-dialog="size=640x400">Beispiel</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/courseware_info/howto') ?>" data-dialog="size=640x550">So geht's</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/courseware_info/explain') ?>" data-dialog="size=640x520">Erklärvideo: Courseware und Vips</a>
                    </li>
                </ul>
                <div style="float:left;">
                  <?= Studip\LinkButton::create(_('Kurs dafür einrichten'), $controller->url_for('assistant/courseware')) ?>
                </div>
            </div>

            <h1>
                Urheberrecht beachten
            </h1>
            <div class="accordion_content">
                <p>Bei der Online-Lehre spielen urheberrechtliche Fragen immer dann eine wichtige Rolle, wenn Sie Materialien verwenden, die Dritte erstellt haben.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/copyright_info/basics') ?>" data-dialog="size=640x650">Urheberrecht: Absolute Grundlagen</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/copyright_info/teaching') ?>" data-dialog="size=640x450">Was darf ich in der Lehre nutzen?</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/copyright_info/files') ?>" data-dialog="size=640x450">Tutorial: Stud.IP Dateibereich nutzen</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="assistant-section" style="clear: both;">
        <h1>
            Online-Zusammenarbeit (z.B. für Seminare und Tutorien)
        </h1>

        <div class="accordion">
            <h1>
                Online-Sitzungen und Videokonferenzen
            </h1>
            <div class="accordion_content">
                <p>Mit Videokonferenzen führen Sie online Team-Besprechungen und Seminar-Sitzungen durch und bieten Online-Sprechstunden für Studierende an.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/meeting_info/example') ?>" data-dialog="size=640x600">Beispiel</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/meeting_info/howto') ?>" data-dialog="size=640x650">So geht's</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/meeting_info/tips') ?>" data-dialog="size=640x500">Tipps und Tricks</a>
                    </li>
                </ul>
                <div style="float:left;">
                  <?= Studip\LinkButton::create(_('Kurs dafür einrichten'), $controller->url_for('assistant/meetings')) ?>
                </div>
            </div>

            <!--<h1>
                Kontinuierliche Gruppenkommunikation (Messenger)
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Messenger öffnen'), $controller->url_for('mail')) ?>
                <div style="float:right;margin-left:10px;">
                    <img src="<?= $plugin->getPluginURL() ?>/assets/studip-riot.jpg" width="160">
                </div>
                <p>Für Lern- und Arbeitsgruppen wird heute oft eine schnelle und niedrigschwellige Kommunikation gewünscht, auch per App vom Mobilgerät (Vorbild: Slack, Whatsapp).
                    Die HS Wismar bietet dafür den Dienst "Riot".</p>
                <ul>
                    <li>
                        <a href="https://www.rz.uni-osnabrueck.de/homeoffice/riot.html" class="link-extern" target="_blank">So geht's: Matrix/Riot einrichten (RZ)</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/messenger_info/blubber') ?>" data-dialog="size=640x500">Alternative in Stud.IP: Blubber-Chat</a>
                    </li>
                </ul>
            </div>-->

            <h1>
                Gemeinsam an Texten arbeiten
            </h1>
            <div class="accordion_content">
                <p>Die gemeinsame Arbeit an Texten ist in vielen Veranstaltungsformen wichtig: Ideen sammeln, Protokolle schreiben,
                    Arbeitsergebnisse zusammentragen. Stud.IP bietet dafür zwei gut integrierte Tools: Pads und Wikis.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/collab_info/example') ?>" data-dialog="size=640x650">Beispiel</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/collab_info/howto') ?>" data-dialog="size=640x600">So geht's</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/collab_info/tips') ?>" data-dialog="size=640x500">Tipps und Tricks</a>
                    </li>
                </ul>
                <div style="float:left;">
                <?= Studip\LinkButton::create(_('Pad einrichten'), $controller->url_for('pad')) ?>
              </div>
            </div>
        </div>
    </section>

<!--### Feedback Section ###-->

<section class="assistant-section" style="clear: both;">
    <h1>
        Feedback einholen
    </h1>

    <div class="accordion">
        <h1>
        Zwei theoretische Ansätze
        </h1>

        <div class="accordion_content">

<p>Stud.IP ermöglicht es Ihnen auf vielen Ebenen Feedback einzuholen, so dass Sie Ihre Studierenden unterstützen und die Online-Lehre während des Semesters evaluieren können. </p><br>
            <ul>
                <li>
                  <a href="<?= $controller->link_for('assistant/feedback_info/howto') ?>" data-dialog="size=640x610">Video: Feedbackformen</a>
                </li>
                <br>
                <li>
                    <a href="<?= $controller->link_for('assistant/feedback_info/verlauf') ?>" data-dialog="size=640x610">Nach Kursverlauf</a>
                </li>
                <br>
                <li>
                    <a href="<?= $controller->link_for('assistant/feedback_info/salmon') ?>" data-dialog="size=640x610">5-Stufen-Modell nach G. Salmon</a>
                </li>
            </ul>
        </div>

  <h1>
    Zwei praktische Tools
  </h1>
    <div class="accordion_content">
<p>Das <b>Forum</b> ist ideal für zeitversetzte (asynchrone) Lehrformate. Zudem eignet es sich, um Fragen und Diskussionen im Team zu strukturieren und zu moderieren.
<div style="float:left;">
<?= Studip\LinkButton::create(_('Forum anlegen'), $controller->url_for('assistant/forum')) ?>
</div><br><br><br>
        <p><b>Blubber</b> eignet sich für die synchrone wie auch asynchrone Kommunikation. Dieses Tool ist daher ideal für Chat-Sprechstunden und Diskussionen.
          <div style="float:left;">
          <?= Studip\LinkButton::create(_('Losblubbern'), $controller->url_for('assistant/blubber')) ?>
        </div>
    </div>
</div>
</section>

<!--Ende Feedback Section -->

    <section class="assistant-section" style="clear: both;">
        <h1>
            Aufgaben stellen
        </h1>

        <div class="accordion">
            <h1>
                Einfache Abgaben: Hausaufgabenorder
            </h1>
            <div class="accordion_content">
                <p>Über die Dateiablage von Stud.IP können Sie Hausaufgaben / Dateien von Kurs-Teilnehmenden
                    einsammeln. Lehrende und Tutor*innen sehen alle Dateien, die Studierenden nur die eigenen.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/homework_info/howto') ?>" data-dialog="size=640x500">So geht's</a>
                    </li>
                </ul>
                <div style="float:left;">
                    <?= Studip\LinkButton::create(_('Hausaufgabenorder einrichten'), $controller->url_for('assistant/homework')) ?>
                  </div>
            </div>

            <h1>
                Übungsblätter und Aufgaben mit Abgabefrist
            </h1>
            <div class="accordion_content">
                <p>Stud.IP bietet mit "Vips" umfangreiche Möglichkeiten für Übungsblätter, Aufgaben mit Abgabefrist und
                    Selbstüberprüfungsaufgaben, die automatisiert oder manuell bewertet werden können.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/vips_info/example') ?>" data-dialog="size=640x610">Beispiel</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/vips_info/howto') ?>" data-dialog="size=640x510">So geht's</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/vips_info/tips') ?>" data-dialog="size=640x400">Tipps und Tricks</a>
                    </li>
                </ul>
                <div style="float:left;">
                    <?= Studip\LinkButton::create(_('Kurs dafür einrichten'), $controller->url_for('assistant/vips')) ?>
                  </div>
            </div>
        </div>
    </section>

    <section class="assistant-section">
        <h1>
            <?= Icon::create('question-circle', Icon::ROLE_INFO)->asImg(20, ['style' => 'vertical-align: text-bottom']) ?>
            Fragen Sie uns...
        </h1>
        <div class="assistant-infobox">
            <p style="text-aling:justify;">
                Wir haben hier nur die grundlegendsten Szenarien vorgestellt. Mit Stud.IP und anderen Diensten können Sie
                    Ihre Lehre auf viele weitere Arten unterstützen. Sprechen Sie uns einfach an:
                <br><br>
                Tel. 03841/753-7805 oder 03841/753-7710<br>
                <a href="https://intern.hs-wismar.de/hochschule/stabsstellen-des-rektorats/e-learning-zentrum/kommunikation-in-corona-zeiten/" class="link-extern" target="_blank"
                    >COVID-19: Hinweise zum Einsatz Digitaler Lehre
                </a><br>
                <a href="https://www.hs-wismar.de/hochschule/einrichtungen/itsmz/it-info/arbeiten-von-unterwegs/" class="link-extern" target="_blank">Dienste des ITSMZ für mobile Arbeit</a>
            </p>

            <?= Studip\LinkButton::create(_('Anfrage stellen'),
                    URLHelper::getURL('dispatch.php/messages/write', ['rec_uname' => 'elz@studip']), ['data-dialog' => '', 'data-action' => 'messages/write']) ?>
        </div>
    </section>

    <section class="assistant-section">
        <h1>
            <?= Icon::create('cc', Icon::ROLE_INFO)->asImg(20, ['style' => 'vertical-align: text-bottom']) ?>
            Danksagung
        </h1>
        <div class="assistant-infobox">
            <p style="text-aling:justify;">
                Das E-Learning-Zentrum bedankt sich beim Zentrum für Digitale Lehre, Campus-Management und Hochschuldidaktik (virtUOS), das diesen Tool-Assistenten programmiert hat.
                <br><br>
                <a href="https://www.virtuos.uni-osnabrueck.de" class="link-extern" target="_blank">Webseite von virtUOS</a><br><br>
                Wenn Ihnen noch ein Tool an dieser Stelle fehlt und Ihrer Meinung vorgestellt werden sollte, schicken Sie uns gern einen Vorschlag:
              </p>

            <?= Studip\LinkButton::create(_('Vorschlag einreichen'),
                    URLHelper::getURL('dispatch.php/messages/write', ['rec_uname' => 'elz@studip']), ['data-dialog' => '', 'data-action' => 'messages/write']) ?>
        </div>
    </section>
    <section class="assistant-section">
        <h1>
            <?= Icon::create('forum', Icon::ROLE_INFO)->asImg(20, ['style' => 'vertical-align: text-bottom']) ?>
            Austausch mit KollegInnen
        </h1>
        <div class="assistant-infobox">
            <p style="text-aling:justify;">
              Wenn Sie gern mit anderen KollegInnen in Austausch zur Online-Lehre treten möchten, so empfehlen wir Ihnen den Beitritt zur Stud.IP Veranstaltung <i>Forum "Online-Lehre"</i>.
                <br><br>
              In dieser Veranstaltung finden Sie auch weitere Tutorials des E-Learning-Zentrums unter dem Reiter Courseware.
                <br>
          </p>

            <a href="https://studip.hs-wismar.de/dispatch.php/course/enrolment/apply/50a39d9edb3348835b846683f3a76faf" class="link-extern" target="_blank">Zum Kurs</a>
        </div>
    </section>
</div>

<script>
    $('.accordion').accordion({
        collapsible: true,
        active: false
    });
</script>
