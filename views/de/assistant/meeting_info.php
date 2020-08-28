<? if ($view === 'example'): ?>
<h2>Online-Sitzungen und Videokonferenzen: Beispiel</h2>
    <p>
        <img src="<?= $plugin->getPluginURL() ?>/assets/bbb-raum.jpg">
        <br><span style="font-size:66%">Videokonferenz mit dem "BigBlueButton"-Server der HS Wismar</span>
    </span>
    </p>
    <p>
    Sie verlegen geplante Meetings mit Ihren Projektteams oder regelmäßige Sitzungen Ihres Seminars
        in einen Online-Raum. Für Studierende können Sie z.B. Ihre Sprechstunden zu den geplanten Terminen online anbieten.
</p>

<? elseif ($view === 'howto'): ?>
    <h2>Online-Sitzungen und Videokonferenzen: So geht's</h2>
    <div style="float:right;margin-left:10px;">
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-menu-meetings.jpg" width="240">
        </p>
        <hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-meetings-raumname.jpg" width="240">
        </p>
        <hr>
    </div>
    <ol>
        <li>Legen Sie in Stud.IP eine Veranstaltung an, z.B. "Meetings Fachbereich" oder "Sprechstunde XY". Über den Menüpunkt "Mehr" aktivieren Sie das Plugin "Meetings".</li>
        <li>Sie können verschiedene Online-Konferenz-Räume erstellen und frei benennen.</li>
        <li>Damit ein Meeting-Raum für Studierende sichtbar ist, müssen Sie ihn noch per Klick auf "freigeben" sichtbar machen.</li>
        <li>Anschließend mit Klick auf den Meeting-Namen die Online-Konferenz starten. Der Konferenzraum öffnet sich in einem neuen Browser-Tab.
Sie werden aufgefordert, zu entscheiden, ob Sie Ihr Mikrofon aktiveren oder nur zuhören möchten.</li>
        <li>Im Online-Raum können Sie sich jederzeit stumm schalten und zusätzlich Ihre Kamera aktiveren.</li>
    </ol>
<p>&nbsp;</p>
    <p>Weitere Informationen zur Nutzung von BigBlueButton finden Sie unter <br>
            <a href="https://www.hs-wismar.de/hochschule/einrichtungen/itsmz/it-info/telefonie-und-videokonferenzen/virtuelle-klassenzimmer-bigbluebutton/" class="link-extern" target="_blank">BigBlueButton auf hs-wismar.de/it-info</a></p>
    <p>
        Hinweise:
        <ul>
            <li>Wichtig: Teilnehmende an den Meetings müssen in der entsprechenden Stud.IP-Veranstaltung eingetragen sein, also z.B. Teilnehmende der Veranstaltung "Meetings Fachbereich" sein.<br>&nbsp;</li>
        </ul>
    </p>
<? elseif ($view === 'tips'): ?>
    <h2>Online-Sitzungen und Videokonferenzen: Tipps und Tricks</h2>
    <ul>
        <li>Für gute Audio-Qualität im Videokonferenz-Raum sollten Sie ein Headset verwenden.<br>&nbsp;</li>
        <li>Während des Meetings empfiehlt es sich, nur das Mikro des/der jeweiligen Sprechers/Sprecherin offen zu lassen. Die übrigen Teilnehmenden sollten ihre Mikros stumm schalten, um Nebengeräusche zu vermeiden.<br>&nbsp;</li>
        <li>Über die Videokonferenz können Sie Ihren Bildschirm allen Teilnehmenden sichtbar machen, z.B. für Präsentationen, gemeinsame Dokumente etc.<br>&nbsp;</li>
    </ul>
    <p>Weitere Informationen zur Nutzung von BigBlueButton finden Sie unter <br>
            <a href="https://www.hs-wismar.de/hochschule/einrichtungen/itsmz/it-info/telefonie-und-videokonferenzen/virtuelle-klassenzimmer-bigbluebutton/" class="link-extern" target="_blank">BigBlueButton auf hs-wismar.de/it-info</a></p>
<? endif ?>
