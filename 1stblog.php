<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php
    include('blog-header.php');
    include('config/db_connect.php');
    include('config/db_comment.php');
  ?>

  <div class="fluid-container" id="browse">
    <br /><br /><br /><br /> <br /><br />
    <div class="container">
      <div class="col-10 mx-auto" style="padding: 0px 0px 15px 0px; margin: 0;">
          <a class = "return" href="blog.php">< Return to site</a>
          <a class = "return" href="browseblogs.php" style="float: right;"> All Posts</a>
      </div>
    </div>
    <div class="container fonts">
      <div class="row">
         <div class="col-10 mx-auto blog-box" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <h1><strong>A Look Back to the Former Major Champion - TNC Predator</strong></h1>
            <small>By Azis Agantal on May 25, 2020, 1:01 PM</small>
            <br/><br/><br/>
            <figure>
              <img class="sub-img-blog" src="assets/tnc.jpg" alt="tnc">
              <figcaption class="center"><small>Image from Mars Media</small></figcaption>
            </figure>
            <br/>
            <p>Last year, TNC Predator came out on top in the first Dota Pro Circuit Major of the season, the MDL Chengdu Major. They surprisingly took down Vici Gaming 3-1, the team that defeated them in the upper bracket finals. Their relentless pressure and map control throughout the series earned them their first major win. Also, they were already on a hot streak by winning the $300,000 ESL One Hamburg tournament.</p>
            <p>Filipino fans like me were fascinated by the performance of their new roster. They brought another glory and recognition to the region as a representative of Southeast Asia. After the debut of the event, different opinions arose, where some critics would say that they won because of tier-one teams like OG, PSG LGD, and Secret withdrew from the tournament. However, there were some notable teams like Vici Gaming, Fnatic, and Evil Geniuses that were expected by their fans to win.</p>
            <p>Today, TNC Predator was eliminated from the ongoing ESL One Birmingham SEA after losing eight times in a row in the group stages. They managed to win a series to Reality Rift 3-1 with a close fight in game three. To this day, they are still struggling to keep up with the meta after the Outlanders update. Some fans were disappointed by their inconsistent results even after acquiring Febby, one of the best Southeast Asian position four players, as a coach to their team.</p>
            <br />
            <figure>
              <img class="sub-img-blog" src="assets/febby.jpg" alt="tnc">
              <figcaption class="center"><small>Image from TNC Pro Team Page</small></figcaption>
            </figure>
            <br/>
            <p>It seems that this significant downhill is just a major setback to their actual goal, the International 10. Some fans are already demanding them to change their roster because they have not been showing any consistency lately. For me, I hope that there won't be any changes to their line up not because they virtually confirmed a spot in TI 10 but because I still believe in their form. From Armel's versatility, Kpii's ability to give space, Gabbi's aggressiveness, Tims' clutch      plays, and March's draft, I still think that a little tweak and positivity would bring the formidable TNC once again. </p>
            <br />
            <div class="share">
                  <a href="#"><i class="fab fa-facebook-square fa-2x" style="color:#3b5998;"></i></a>
                  <a href="#"><i class="fab fa-twitter-square fa-2x" style="color: #00acee;"></i></a>
                  <a href="#"><i class="fab fa-linkedin fa-2x" style="color: #0e76a8;"></i></a>
                  <a href="#blogcomments"><i class="far fa-comment left fa-2x icon"></i></a>
                  <a href=""><i class="far fa-envelope left fa-2x icon"></i></a>
            </div>
            <br />
              <p><strong>Tags:</strong> #MDLChengdu #TNC #Dota-Pro-Circuit</p>
          </div>
      </div>

      <div class="row">
                <div class="col-10 mx-auto blog-box-2" id="commentbox" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                      <form  action="#commentbox" method="post">
                            <h2 id="blogcomments">Comments (<?php echo htmlspecialchars($count); ?>)</h2>
                            <br/>
                            <?php  foreach($infos as $info) {?>
                                <div class="row">
                                  <div class="col-1 center" style="padding: 0;">
                                       <i class="fas fa-user-alt fa-3x"></i>
                                  </div>
                                  <div class="col-11" style="padding-left: 5px;">
                                      <strong style="display: block;"><?php echo htmlspecialchars($info['Name']); ?></strong>
                                      <p style="display: block; margin: 0;"><?php echo htmlspecialchars($info['Comment']); ?></p>
                                      <small><?php echo htmlspecialchars($info['curtime']); ?></small>
                                  </div>
                                </div>
                                <br />
                            <?php } ?>
                            <div class="form-group col-6 mr-auto" style="padding: 0;">
                                <h3 style="padding-bottom: 10px;">Add a Comment</h3>
                                <input class="form-control" class="form-control" type="text" name="your_name" maxlength="30" placeholder="Enter your name" value= "<?php echo htmlspecialchars($name); ?>">
                                <div>
                                  <small style="color: red;"> <?php echo $errors['name']; ?></small>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="your_comment"  maxlength="230" placeholder="Write comment.."  rows="3" cols="100" value= "<?php echo htmlspecialchars($comment); ?>"></textarea>
                                <div>
                                  <small style="color: red;"><?php echo $errors['comment']; ?></small>
                                </div>
                            </div>
                            <input type="submit" name="submit" value="Post Comment" class="btn btn-primary">
                      </form>
                </div>

      </div>
    </div>


    <br/><br/><br/>

      <div class="container-fluid ftr">
          <div class="container">
            <br /><br />
            <div class="row ">
                <div class="col-12 center" id="space">
                   <a class="soc soc-1" href="https://www.facebook.com/azis.agantal"><i class="fab fa-facebook fa-2x"></i></a>
                   <a class="soc soc-2" href="https://www.instagram.com/azis_agantal/?hl=en"><i class="fab fa-instagram fa-2x"></i></a>
                   <a class="soc soc-3" href="https://twitter.com/AgantalAzis"><i class="fab fa-twitter fa-2x"></i></a>
                   <a class="soc soc-4" href="https://github.com/agantal864"><i class="fab fa-github fa-2x"></i></a>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 center white">
               <p style="padding: 0.5vw; font-size: 0.9rem;">&copy; Azis Agantal. Hook Them. All rights reserved.</p>
            </div>
          </div>
          <div class="row">
              <div class="col-12 center white">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_donations" />
                    <input type="hidden" name="business" value="aamagantal@gmail.com" />
                    <input type="hidden" name="currency_code" value="PHP" />
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                    <img alt="" border="0" src="https://www.paypal.com/en_PH/i/scr/pixel.gif" width="1" height="1" />
                </form>
              </div>
          </div>
      </div>
    </div>

    <?php include('components/scripts.php') ?>

  </body>
</html>
