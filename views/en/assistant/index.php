<div class="assistant-container">
    <section class="assistant-section">
        <h1>
            The basics
        </h1>

        <div class="accordion">
            <h1>
                Notify participants
                (Stud.IP: Message to all)
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Write circular e-mail'),
                    URLHelper::getURL('dispatch.php/messages/write', [
                        "course_id" => $course_id,
                        'default_subject' => sprintf('[%s]', Context::get()->Name),
                        "filter" => "all",
                        "email request" => 1
                    ]), ['data-dialog' => '', 'data-action' => 'messages/write_all']) ?>
                <p>You can send information to all registered course participants via Stud.IP messages.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/mail_info/example') ?>" data-dialog="size=640x400;title='Teach online: Notify participants'">Example</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/mail_info/howto') ?>" data-dialog="size=640x600;title='Teach online: Notify participants'">This is how it works</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/mail_info/tips') ?>" data-dialog="size=640x600;title='Teach online: Notify participants'">Tips and tricks</a>
                    </li>
                </ul>
            </div>

            <h1>
                Provide materials online
                (Stud.IP: Files)
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create('Upload file', '#', ['onclick' => "STUDIP.Files.openAddFilesWindow('$folder_id')", 'data-action' => 'files/upload']) ?>
                <p> In the Stud.IP file area files can be uploaded and linked. With the "Courseware" module,
                    you can merge and compile different media (see "Compiling materials"). </p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/files_info/example') ?>" data-dialog="size=640x400;title='Teach online: Provide materials online'">Example</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/files_info/howto') ?>" data-dialog="size=640x600;title='Teach online: Provide materials online'">This is how it works</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/files_info/tips') ?>" data-dialog="size=640x400;title='Teach online: Provide materials online'">Tips and tricks</a>
                    </li>
                </ul>
            </div>

            <h1>
                Set up Corona info page
                (Stud.IP: Information)</em>
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create('Set up corona info page', $controller->url_for('assistant/corona')) ?>
                <p> Inform your participants about how your course starts into the semester.</p>
                <p>We have created a template that lets you provide the most important information and answers to questions in a structured way.</p>
                <!--<ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/corona_info/howto') ?>" data-dialog="size=640x600">This is how') ?></a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/corona_info/tips') ?>" data-dialog="size=640x400">tips and tricks') ?></a>
                    </li>
                </ul>-->
            </div>

            <h1>
                Good teaching without a classroom!?</em>
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Didactical remarks'), 'https://www.hs-wismar.de/en/university/einrichtungen/e-learning-centre/develop-teaching/', ['target' => '_blank', 'data-action' => 'tips/gute_lehre']) ?>
                <p>We have put together some didactic hints and suggestions so that you can adapt your teaching to the current conditions
                    and the increased demands on the students' self-learning skills as well as possible. </p>

                <!--<ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/corona_info/howto') ?>" data-dialog="size=640x600">This is how') ?></a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/corona_info/tips') ?>" data-dialog="size=640x400">tips and tricks') ?></a>
                    </li>
                </ul>-->
            </div>

        </div>
    </section>

    <section class="assistant-section">
      <!--  <h1>
            Online lectures (e.g. for lectures)
        </h1>

        <div class="accordion">
            <h1>
                Recordings in lecture hall without audience
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create('Send a request',
                    URLHelper::getURL('dispatch.php/messages/write',
                        ['rec_uname' => 'elz@studip',
                            'default_subject' => _('Request a lecture hall recording for '.Context::get()->Name),
                            'default_body' => _('Dear elearning team,
I want to record in the lecture hall of house 1 room 131.

My preferred date: (date/weekday, time, once/regularly)

Event: '.Context::get()->Name.' ('.$course_id.')

Phone number for questions:

')]),
                    ['data-dialog' => '', 'data-action' => 'messages/write']) ?>
                <p>The lecture halls of the university can be used for lectures without an audience. Over 20 rooms are
                    equipped for fully automatic video recording, you only have to book a time.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/lecturehall_info/example') ?>" data-dialog="size=640x675">Example</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/lecturehall_info/howto') ?>" data-dialog="size=640x400">This is how it works</a>
                    </li>
                </ul>
            </div>
-->
            <h1>
                Recording in the studio
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Further information'),
                    'https://www.hs-wismar.de/en/university/information/presse-medien/coronavirus-information/',
                    ["target"=>"_blank", 'data-action' => 'tips/covid']) ?>
                <p>
                    Hochschule Wismar runs two video studios in rooms 15/125 and 07/102 (LehrKolleg).
                    Here, with the support and instruction of virtUOS staff, you can produce videos in above-average
                    quality.
                </p>
                <p>
                    Please contact us with an e-mail to
                    <a href="mailto:elearning@hs-wismar.de">elearning@hs-wismar.de</a>.
                </p>
            </div>

            <h1>
                Record podcasts and videos yourself
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Set up course for this'), $controller->url_for('mail')) ?>
                <p>Would you like to make audio and video recordings on your computer and provide them to the participants? There are various tools for this:</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/recording_info/opencaststudio') ?>" data-dialog="size=640x600">Opencast Studio (Our recommendation!)</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/recording_info/powerpoint') ?>" data-dialog="size=640x500">Record directly in Powerpoint</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/recording_info/tips') ?>" data-dialog="size=640x500">Tips and tricks</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="assistant-section">
        <h1>
            Use teaching materials
        </h1>

        <div class="accordion">
            <h1>
                OER portals for exchanging free materials
            </h1>
            <div class="accordion_content">
                <!-- <?= Studip\LinkButton::create(_('OER-Portal Lower Saxony'), 'https://www.oernds.de', ['target'=>'_blank', 'data-action' => 'tips/oer']) ?> -->
                <p>Open Educational Resources are materials that are freely provided by teachers: free for use, but also for further processing.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/oer_info/example') ?>" data-dialog="size=850x625">Links and portals</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/oer_info/howto') ?>" data-dialog="size=640x550">Explanatory video (Youtube)</a>

                    </li>
                </ul>
            </div>

            <h1>
                Compiling materials (Stud.IP: Courseware)
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create('Set up course for this', $controller->url_for('assistant/courseware')) ?>
                <p>With the Stud.IP "Courseware" module you can merge various sources and create interactive multimedia learning modules.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/courseware_info/example') ?>" data-dialog="size=640x400">Example</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/courseware_info/howto') ?>" data-dialog="size=640x550">This is how it works</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/courseware_info/explain') ?>" data-dialog="size=640x520">Explanatory video: Courseware and Vips</a>
                    </li>
                </ul>
            </div>

            <h1>
                Respect copyright law
            </h1>
            <div class="accordion_content">
                <p>In online teaching, copyright issues always play an important role when you use material created by third parties.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/copyright_info/basics') ?>" data-dialog="size=640x650">German copyright law: The basics</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/copyright_info/teaching') ?>" data-dialog="size=640x450">What can I use in teaching?</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="assistant-section" style="clear: both;">
        <h1>
            Online collaboration (e.g. for seminars and tutorials)
        </h1>

        <div class="accordion">
            <h1>
                Online meetings and video conferences
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Set up course for this'), $controller->url_for('assistant/meetings')) ?>
                <p>With video conferencing you can conduct online team meetings and seminar sessions or offer online consultation hours for students.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/meeting_info/example') ?>" data-dialog="size=640x600">Example</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/meeting_info/howto') ?>" data-dialog="size=640x650">This is how it works</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/meeting_info/tips') ?>" data-dialog="size=640x500">Tips and tricks</a>
                    </li>
                </ul>
            </div>
<!--
            <h1>
                Continuous group communication (Messenger)
            </h1>
            <div class="accordion_content">
                = Studip\LinkButton::create(_('Open messenger'), $controller->url_for('mail')) ?>
                <div style="float:right;margin-left:10px;">
                    <img src="<?= $plugin->getPluginURL() ?>/assets/studip-riot.jpg" width="160">
                </div>
                <p>Fast and low-threshold communication is a common request nowadays, also via an app from mobile devices (like Slack or Whatsapp).
                    Hochschule Wismar offers the "Riot" service for this purpose.
                <ul>
                    <li>
                        <a href="https://www.rz.uni-osnabrueck.de/homeoffice/riot.html" class="link-external" target="_blank">Guide: Set up Matrix/Riot (RZ)</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/messenger_info/blubber') ?>" data-dialog="size=640x500">An alternative in Stud.IP: Blubber chat</a>
                    </li>
                </ul>
            </div> -->

            <h1>
                Working together on texts
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create('Set up pad', $controller->url_for('pad')) ?>
                <p>The joint work on texts is important in many forms of courses: collecting ideas, writing protocols,
                    collecting work results. Stud.IP offers two well integrated tools for this: Pads and Wikis.
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/collab_info/example') ?>" data-dialog="size=640x650">Example</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/collab_info/howto') ?>" data-dialog="size=640x650">This is how it works</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/collab_info/tips') ?>" data-dialog="size=640x500">Tips and tricks</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!--### Feedback Section ###-->

    <section class="assistant-section" style="clear: both;">
        <h1>
            Get Feedback
        </h1>

        <div class="accordion">
            <h1>
            Two theoretical approaches
            </h1>

            <div class="accordion_content">
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/feedback_info/salmon') ?>" data-dialog="size=640x610">5 step modell according to G. Salmon</a>
                    </li>
                    <br>
                    <li>
                        <a href="<?= $controller->link_for('assistant/feedback_info/verlauf') ?>" data-dialog="size=640x610">Depending on course progress</a>
                    </li>
                    <li>
                      <a href="<?= $controller->link_for('assistant/feedback_info/howto') ?>" data-dialog="size=640x610">Explanatory video</a>
                    </li>
                </ul>
            </div>

      <h1>Two practical Tools</h1>
        <div class="accordion_content">
    <?= Studip\LinkButton::create(_('Create a Forum'), $controller->url_for('assistant/forum')) ?>
    <p>Asynchronously discuss problems and questions in the forum. This is useful in combination with asynchronous teaching methods.
      <?= Studip\LinkButton::create(_('Start Blubbering'), $controller->url_for('assistant/blubber')) ?>
            <p>Synchronously discuss problems and questions in the blubber. Make an appointment with your students for a consultation hour with Blubber.
        </div>
    </div>
    </section>

    <!--Ende Feedback Section -->

    <section class="assistant-section" style="clear: both;">
        <h1>
            Tasks and homeworks
        </h1>

        <div class="accordion">
            <h1>
                Simple turning-in procedures: Homework folder
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Set up homework folder'), $controller->url_for('assistant/homework')) ?>
                <p>The Stud.IP files tools allows collect  files as homework submissions from course participants. Teachers and tutors see all files, students only their own.
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/homework_info/howto') ?>" data-dialog="size=640x500">This is how it works</a>
                    </li>

                </ul>
            </div>

            <h1>
                Exercise sheets and tasks with deadlines
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Set up course for Vips'), $controller->url_for('assistant/vips')) ?>
                <p>The Stud.IP "Vips" module provides comprehensive options for exercise sheets, tasks with deadlines and
                    self-checking tasks that can be evaluated automatically or manually.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/vips_info/example') ?>" data-dialog="size=640x600">Example</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/vips_info/howto') ?>" data-dialog="size=640x510">This is how it works</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/vips_info/tips') ?>" data-dialog="size=640x400">Tips and tricks</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="assistant-section">
        <h1>
            <?= Icon::create('question-circle', Icon::ROLE_INFO)->asImg(20, ['style' => 'vertical-align: text-bottom']) ?>
            Contact us...
        </h1>
        <div class="assistant-infobox">
            <p style="text-aling:justify;">
                Here we only present the most basic scenarios. There are far more ways to support your teaching by using Stud.IP and other services. For further information please feel free to contact us:
                <br><br>
                <a href="mailto:elearning@hs-wismar.de" class="link_e" >elearning@hs-wismar.de</a><br>
                Tel. 03841/753 7805<br>
                <a href="https://intern.hs-wismar.de/hochschule/stabsstellen-des-rektorats/e-learning-zentrum/kommunikation-in-corona-zeiten/" class="link-extern" target="_blank">COVID-19: Notes on the use of digital teaching </a><br>
                <a href="https://www.hs-wismar.de/en/university/einrichtungen/itsmz/it-info/working-on-the-go/" class="link-extern" target="_blank">Services for mobile work provided by the ITSMC</a>
            </p>

            <?= Studip\LinkButton::create(_('Send a request'),
                URLHelper::getURL('dispatch.php/messages/write', ['rec_uname' => 'elz@studip',
                    'default_subject' => 'Request about digital teaching for '.Context::get()->Name
                ]), ['data-dialog' => '', 'data-action' => 'messages/write']) ?>
        </div>
    </section>

    <section class="assistant-section">
        <h1>
            <?= Icon::create('cc', Icon::ROLE_INFO)->asImg(20, ['style' => 'vertical-align: text-bottom']) ?>
            Credits
        </h1>
        <div class="assistant-infobox">
            <p style="text-aling:justify;">
                The E-Learning Centre would like to thank the Centre for Digital Teaching, Campus Management and University Didactics (virtUOS) of Osnabrück University for creating this tool assistant.
                <br><br>
                <a href="https://www.virtuos.uni-osnabrueck.de" class="link-extern" target="_blank">Website of virtUOS</a><br><br>
              You think that a tool is missing here? Please let us know and hand in a proposition.
              </p>

            <?= Studip\LinkButton::create(_('Hand in proposition'),
                    URLHelper::getURL('dispatch.php/messages/write', ['rec_uname' => 'elz@studip']), ['data-dialog' => '', 'data-action' => 'messages/write']) ?>
        </div>
    </section>
    <section class="assistant-section">
        <h1>
            <?= Icon::create('forum', Icon::ROLE_INFO)->asImg(20, ['style' => 'vertical-align: text-bottom']) ?>
            Meetup with Colleagues
        </h1>
        <div class="assistant-infobox">
            <p style="text-aling:justify;">
              If you like to discuss the possibilities of online teaching with your colleagues please join our course <i>Lehrendenschaft</i>.
                <br><br>
              Within this course you can also find useful tutorials at the tab <i>Courseware</i>.
                <br>
          </p>

            <a href="https://studip.hs-wismar.de/dispatch.php/course/enrolment/apply/50a39d9edb3348835b846683f3a76faf" class="link-extern" target="_blank">Join the course</a>
        </div>
    </section>

</div>
<script>
    $('.accordion').accordion({
        collapsible: true,
        active: false
    });
</script>
