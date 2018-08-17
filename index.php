<?php
require_once 'vendor/autoload.php';
use ICal\ICal;
try {
  $ical = new ICal('ICal.ics', array(
    'defaultSpan'           => 2,     // Default value
    'defaultTimeZone'       => 'UTC',
    'defaultWeekStart'      => 'MO',  // Default value
    'skipRecurrence'        => false, // Default value
    'useTimeZoneWithRRules' => false, // Default value
  ));
  // $ical->initFile('ICal.ics');
  $ical->initUrl('http://www.scoutbook.com/ics/16509.92DC2.ics');
} catch (\Exception $e) {
  die($e);
}
$forceTimeZone = false;
?>
<!DOCTYPE HTML>
<html>
<!--
Website designed and developed by Orange Flame Design
                         ___ _
 ___ ___ ___ ___ ___ ___|  _| |___   _____ ___
| . |  _| .'|   | . | -_|  _| | .'|_|     | -_|
|___|_| |__,|_|_|_  |___|_| |_|__,|_|_|_|_|___|
                |___|

https://orangefla.me
-->

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome to Pack 247 • Kansas City, MO • Chartered by Good Shepherd United Methodist Church</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://use.typekit.net/bbl8eix.js"></script>
    <script>
      try {
        Typekit.load({
          async: true
        });
      } catch (e) {}
    </script>
  </head>

  <body>
    <main>
      <div class="container">
        <header class="row header">
          <div class="col-sm-12">
            <img class="img-fluid" src="images/pack-247-header.jpg" alt="Pack 247">
          </div>
        </header>
        <div class="row info">
          <div class="pack-calendar col-sm-6 col-lg-3">
            <h2>2017-2018 Calendar</h2>
            <p>The following is our calendar for the school year (subject to change).</p>
            <p>You can keep up with the Pack calendar either in our Facebook group, or by subscribing to the Pack calendar on
              your smartphone, tablet, or computer.</p>
            <a class="btn-join btn-scoutbook" href="http://www.scoutbook.com/ics/16509.92DC2.ics" target="_blank">
              <i class="fa fa-calendar" aria-hidden="true"></i> Subscribe to our Calendar</a>
            <hr>
            <ul class="list-unstyled list-calendar">
              <?php
            $events = $ical->eventsFromRange(date('d-m-Y H:i:s'), '2018-06-01 17:00:00');
            foreach ($events as $event) :
              $dtstart = $ical->iCalDateToDateTime($event->dtstart_array[3], $forceTimeZone);
          ?>
                <li>
                  <div class="calendar-date">
                    <h6>
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                      <?php echo $event->summary; ?>
                    </h6>
                  </div>
                  <?php echo $dtstart->format('F j, Y - g:i a'); ?>
                </li>
                <?php endforeach ?>
            </ul>
          </div>
          <div class="den-meetings col-sm-6 col-lg-3">
            <h2>Den Meetings</h2>
            <blockquote>
              &rdquo;When does our grade meet?&rdquo;
            </blockquote>
            <p>That's the number one question we receive.</p>
            <p>Our dens mostly meet on Tuesdays. To see what evenings your den meets, see below:</p>
            <h4>All meetings begin at 7:00 pm</h4>
            <figure class="den-meetings--rank lion">
              <img src="images/lion.svg" alt="Lion">
              <figcaption>
                <h5>Kindergarten - Lion</h5>
                <h6 class="den-strip">Den 6</h6>
                <ul class="list-unstyled">
                  <li>
                    <strong>Lion Coordinator:
                      <br>Susanne Thompson-Wright</strong>
                  </li>
                  <li>4
                    <sup>th</sup> Tuesdays</li>
                </ul>
              </figcaption>
            </figure>
            <figure class="den-meetings--rank tiger">
              <img src="images/tiger.svg" alt="Tiger">
              <figcaption>
                <h5>1
                  <sup>st</sup> Grade - Tiger</h5>
                <h6 class="den-strip">Den 1</h6>
                <ul class="list-unstyled">
                  <li>
                    <strong>Den Leader:
                      <a href="mailto:jad.callahan@gmail.com">Jad Callahan</a>
                    </strong>
                  </li>
                  <li>2
                    <sup>nd</sup> and 4
                    <sup>th</sup> Tuesdays</li>
                </ul>
              </figcaption>
            </figure>
            <figure class="den-meetings--rank wolf">
              <img src="images/wolf.svg" alt="Wolf">
              <figcaption>
                <h5>2
                  <sup>nd</sup> Grade - Wolf</h5>
                <h6 class="den-strip">Den 2</h6>
                <ul class="list-unstyled">
                  <li>
                    <strong>Den Leader:
                      <a href="mailto:jlewis4247@gmail.com">Joe Lewis</a>
                    </strong>
                  </li>
                  <li>1
                    <sup>st</sup> and 3
                    <sup>rd</sup> Tuesdays</li>
                </ul>
                <h6 class="den-strip">Den 7</h6>
                <ul class="list-unstyled">
                  <li>
                    <strong>Den Leader:
                      <a href="mailto:ppearson25@hotmail.com">Paul Pearson</a>
                    </strong>
                  </li>
                  <li>2
                    <sup>nd</sup> and 4
                    <sup>th</sup> Tuesdays</li>
                </ul>
              </figcaption>
            </figure>
            <figure class="den-meetings--rank bear">
              <img src="images/bear.svg" alt="Bear">
              <figcaption>
                <h5>3
                  <sup>rd</sup> Grade - Bear</h5>
                <h6 class="den-strip">Den 5</h6>
                <ul class="list-unstyled">
                  <li>
                    <strong>Den Leader:
                      <a href="mailto:staceythompson.den5@gmail.com">Stacey Thompson</a>
                    </strong>
                  </li>
                  <li>1
                    <sup>st</sup> and 3
                    <sup>rd</sup> Tuesdays</li>
                </ul>
              </figcaption>
            </figure>
            <figure class="den-meetings--rank webelos">
              <img src="images/webelos.svg" alt="Webelos">
              <figcaption>
                <h5>4
                  <sup>th</sup> Grade - Webelos I</h5>
                <h6>Doge Patrol</h6>
                <ul class="list-unstyled">
                  <li>
                    <strong>Den Leader:
                      <a href="mailto:cubmaster@pack247.org">Jeremy Fuksa</a>
                    </strong>
                  </li>
                  <li>1
                    <sup>st</sup> and 3
                    <sup>rd</sup> Tuesdays</li>
                </ul>
                <h6>Voodoo Dragon Patrol</h6>
                <ul class="list-unstyled">
                  <li>
                    <strong>Den Leader:
                      <a href="mailto:skyhook90@gmail.com">Tyson Robinett</a>
                    </strong>
                  </li>
                  <li>
                    <strong>Meets:</strong> 2
                    <sup>nd</sup> and 4
                    <sup>th</sup> Mondays</li>
                </ul>
              </figcaption>
            </figure>
            <figure class="den-meetings--rank webelos">
              <img src="images/aol.svg" alt="Arrow of Light">
              <figcaption>
                <h5>5
                  <sup>th</sup> Grade - Webelos II</h5>
                <h6>Scorpion Patrol</h6>
                <ul class="list-unstyled">
                  <li>
                    <strong>Den Leader:
                      <a href="mailto@todddolato@gmail.com">Todd Dolato</a>
                    </strong>
                  </li>
                  <li>
                    <strong>Meets:</strong> 1
                    <sup>st</sup> and 3
                    <sup>rd</sup> Mondays</li>
                </ul>
              </figcaption>
            </figure>
          </div>
          <div class="resources col-sm-6 col-lg-3">
            <h2>Resources</h2>
            <a href="https://my.bsa.us/307paa4247mb" target="_blank">
              <img class="join-cta" src="images/btn-join.jpg" alt="Join our Pack online - Click here">
            </a>
            <h5>Pack Communications</h5>
            <h6>Facebook</h6>
            <p>The
              <a href="https://facebook.com/groups/pack.247.families/" target="_blank">Families of Pack 247</a> Facebook Group gives everyone a way to interact, keep up-to-date on Pack events, give
              valuable feedback, and share photos and videos of our Scouts.</p>
            <a class="btn-join btn-facebook" href="https://www.facebook.com/groups/pack.247.families/" target="_blank">
              <i class="fab fa-facebook-square" aria-hidden="true"></i> Join our Facebook Group</a>
            <h6>Scoutbook</h6>
            <p>We use Scoutbook to keep track of all advancement. If your Scout completes requirements on his own, you are highly
              encouraged to enter them on his Scoutbook profile for approval.</p>
            <a class="btn-join btn-scoutbook" href="http://scoutbook.com/mobile" target="_blank">
              <i class="fa fa-compass" aria-hidden="true"></i> Log in to Scoutbook</a>
            <h6>Slack</h6>
            <p>Pack 247 uses Slack to plan all Pack events. All Pack families are encouraged to join the Pack's Slack team so
              that we can build a great program together.</p>
            <a class="btn-join btn-slack" href="http://pack247.org/slack">
              <i class="fab fa-slack" aria-hidden="true"></i> Join our Slack Team</a>
            <h5>Frequently Used Links</h5>
            <ul class="list-unstyled link-list">
              <li>
                <a href="pdf/4247-bylaws-and-guidelines.pdf" target="_blank">
                  <i class="far fa-file-pdf" aria-hidden="true"></i> Pack 247 Bylaws and Guidelines</a>
              </li>
              <li>
                <a href="https://www.hoac-bsa.org/Data/Sites/1/media/membership/recruitment/cub-scouts/HOAC-Parent-Guide.pdf"
                  target="_blank">
                  <i class="far fa-file-pdf" aria-hidden="true"></i> Parent Orientation Guide</a>
              </li>
              <li>
                <a href="http://www.scouting.org/filestore/HealthSafety/pdf/680-001_ABC.pdf" target="_blank">
                  <i class="far fa-file-pdf" aria-hidden="true"></i> BSA Annual Health and Medical Record</a>
              </li>
              <li>
                <a href="http://scouting.org" target="_blank">
                  <i class="fa fa-link" aria-hidden="true"></i> Boy Scouts of America website</a>
              </li>
              <li>
                <a href="http://hoac-bsa.org" target="_blank">
                  <i class="fa fa-link" aria-hidden="true"></i> Heart of America Council, BSA website</a>
              </li>
              <li>
                <a href="http://scoutstuff.org" target="_blank">
                  <i class="fa fa-link" aria-hidden="true"></i> ScoutStuff.org</a>
              </li>
            </ul>
          </div>
          <div class="pack-organization col-sm-6 col-lg-3">
            <h2>Pack Organization</h2>
            <figure class="organization--leader">
              <img src="images/joe-lewis.jpg" alt="Joe Lewis">
              <figcaption>
                <h5>Committee Chairman</h5>
                <ul class="list-unstyled">
                  <li>
                    <strong>Joe Lewis</strong>
                  </li>
                  <li>
                    <a href="mailto:jlewis4247@gmail.com">jlewis4247@gmail.com</a>
                  </li>
                  <li>(816) 308-7971</li>
                </ul>
              </figcaption>
            </figure>
            <figure class="organization--leader">
              <img src="images/jeremy-fuksa.jpg" alt="Jeremy Fuksa">
              <figcaption>
                <h5>Cubmaster</h5>
                <ul class="list-unstyled">
                  <li>
                    <strong>Jeremy Fuksa</strong>
                  </li>
                  <li>
                    <a href="mailto:cubmaster@pack247.org">cubmaster@pack247.org</a>
                  </li>
                  <li>(816) 852-0668</li>
                </ul>
              </figcaption>
            </figure>
            <figure class="organization--leader">
              <img src="images/jeff-young.jpg" alt="Jeff Young">
              <figcaption>
                <h5>Assistant Cubmaster</h5>
                <ul class="list-unstyled">
                  <li>
                    <strong>Jeff Young</strong>
                  </li>
                  <li>
                    <a href="mailto:redshiftz@gmail.com">redshiftz@gmail.com</a>
                  </li>
                  <li>(816) 555-5555</li>
                </ul>
              </figcaption>
            </figure>
            <h4>Pack Committee</h4>
            <h5>We need your help!</h5>
            <p>Several of our committee positions are currently vacant. We rely on our Pack families to share responsibilities
              to make this Pack great. If you are interested in one of our vacant positions,
              <a href="mailto:jlewis4247@gmail.com">contact our Committee Chairman</a>.</p>
            <hr>
            <h6>Administration</h6>
            <ul class="list-unstyled list-committee">
              <li>
                <strong>Secretary: </strong>Dan Buchholz</li>
              <li>
                <strong>Treasurer: </strong>Tiffany Young</li>
              <li>
                <strong>Registrar: </strong>Adrienne Lewis</li>
              <li>
                <strong>Fundraising: </strong>Abby Pearson</li>
              <li>
                <strong>Advancement: </strong>Robin Fuksa</li>
              <li>
                <strong>New Member Coordinator: </strong>Susanne Thompson-Wright</li>
            </ul>
            <h6>Activities</h6>
            <ul class="list-unstyled list-committee">
              <li>
                <strong>Pinewood Derby: </strong>Jeff Young</li>
              <li class="open-position">
                <strong>Blue and Gold: VACANT</strong>
              </li>
              <li>
                <strong>Public Service: </strong>Jennifer Stricherz</li>
              <li>
                <strong>Summer Activities: </strong>Susan Wallen</li>
            </ul>
            <h6>Camping</h6>
            <ul class="list-unstyled list-committee">
              <li class="open-position">
                <strong>Camping Chair: VACANT</strong>
              </li>
              <li class="open-position">
                <strong>Day Camp: VACANT</strong>
              </li>
              <li class="open-position">
                <strong>Bear Camp: VACANT</strong>
              </li>
              <li class="open-position">
                <strong>Webelos Camp: VACANT</strong>
              </li>
            </ul>
            <h6>Advisory</h6>
            <ul class="list-unstyled list-committee">
              <li>
                <strong>Chartered Org. Rep.: </strong>Denise Nance</li>
              <li>
                <strong>Unit Commissioner: </strong>John Head</li>
            </ul>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>