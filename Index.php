
<?php
include_once 'include/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>NSUgrad</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/Style.css" />
  <link rel="stylesheet" href="CSS/mobile-style.css">
</head>

<body>
  <header>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <i class="fas fa-user-graduate fa-2x mx-3" href="#HOME"></i>NSUgrad</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#HOME">HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Temp">TEMPLATE</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#faqs">FAQs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Abou">CONTACT</a>
            </li>
            <li class="nav-item">
              <a  type="button" class="nav-link" data-toggle="modal" data-target="#myModal"  style="color:#ff512f;" href="#myModal">DISCLAIMER</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div id= "HOME" class="container text-center">
      <div class="row">
        <div class="col-md-7 col-sm-12  text-white">
          <h6>Department of Electrical and Computer Engineering</h6>
          <h1>THESIS TEMPLATE</h1>
          <a class="btn btn-light px-3 py-2 primary-btn" href="#tutorial"><i class="fa fa-play"></i> Watch Tutorials</a>
        </div>
        <div class="col-md-5 col-sm-12  h-25">
           <img class="d-block w-100" src="assets/0002.jpg" alt="First slide">
                 <!--Caption-->
                <div class="carousel-caption">
                    <div class="flex-center animated fadeInDown">
                        
                          
                       <a target="_blank" href="https://drive.google.com/file/d/1ea-Io_BSUwo5Q1FCTsYhhsrMzhG4jPUj/view?usp=sharing" style="font-family: var(--Sniglet-font); font-size: 1em;
                        color: whitesmoke; border-radius: 30px;
                        background-color: #ff512f; border: none;" class="btn btn-primary btn-lg">View Sample Thesis</a>
                                
                          
                    </div>
               
      </div>
    </div>
  </header>
  <main>
    <section id = "tutorial" class="section-4">
      <div class="container text-center">
        <h1 class="text-dark">Watch Tutorials</h1>
        <p class="text-secondary">Watch the tutorials to help you get started</p>
      </div>
      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class= "embed-responsive embed-responsive-16by9">
                  <iframe width="auto" height="315"  src="https://www.youtube.com/embed/xL5KrmsppDc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                  <h3 class="card-title">MS Word Tutorial</h3>
                </div>
              </div>
        </div>
        
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="auto" height="315" src="https://www.youtube.com/embed/jx1E_6wDJgQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                  <h3 class="card-title">Overleaf Tutorial</h3>
                </div>
              </div>
        </div>
         <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="auto" height="315" src="https://www.youtube.com/embed/tRbL-A7liCQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div id="mik" class="card-body">
                  <h3 class="card-title">MiKTex Tutorial</h3>
                </div>
              </div>
        </div>
        </div>
      </div>
    </section>
    <section id="Temp" class="section-3 container-fluid p-0 text-center">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <h1>NSU Thesis Template</h1>
          <p>
            When writing your CSE299/CSE499/CSE498R report, you will most likely need to format your paper for submission. To make things easier, MS-Word template and Overleaf (an Overleaf account is required) or for your local TeX system template (as Zip) are available for download and apply to your research paper format.
          </p>
        </div>
      </div>
      <div class="platform row">
        <div class="col-md-6 col-sm-12 text-right">
          <div class="desktop shadow-lg">
            <div class="d-flex flex-row justify-content-center">
              
              <div class="text text-center">
                <h3 class="pt-1 m-0">MS WORD</h3>

                 <a href="./download.php?file=NSU_Thesis_Template.docx">Download MS Template</a> <p style=" margin-bottom: 0rem; color: gray; font-size: 1.5vmin">Total downlaods: 
      <?php    
          $file = basename("./files/NSU_Thesis_Template.docx");
          $md_file = md5($file);
          $result = mysqli_query($con,"SELECT `count` FROM `counter` WHERE `file_name` = '$md_file';");
          $row = mysqli_fetch_assoc($result);
          echo "Result: " . $row['count'];
      ?>                          </p>
                
                 
                    
                  
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 text-left">
          <div class="desktop shadow-lg">
            <div class="d-flex flex-row justify-content-center">
              
              <div class="text text-center">
                <h3 class="pt-1 m-0">Online/Local Editor (LaTex Format)</h3> 

                <a href="./download.php?file=NSU Thesis Template.zip">Download as Zip</a> <p style="margin-bottom: 0rem; color: gray; font-size: 1.5vmin">Total downloads: <?php   
          $file = basename("./files/NSU Thesis Template.zip");
          $md_file = md5($file);
          $result = mysqli_query($con,"SELECT `count` FROM `counter` WHERE `file_name` = '$md_file';");
          $row = mysqli_fetch_assoc($result);
          echo "Result: " . $row['count'];
      ?>                              </p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Disclaimer</h4>
        </div>
        <div class="modal-body">
          <p>We may use copyrighted material that has not always been expressly authorized by the owner of the copyright. We are making this material available for criticism, commentary, news reporting, teaching, scholarship, and research.</p>
          <p>We believe this is a "fair use" of any such copyrighted material, as defined in Section 107 of the United States Copyright Act.</p>
          <p>You must obtain permission from the copyright owner if you wish to use copyrighted material from the website for purposes other than fair use.</p>
          <p>If you have any questions about this Disclaimer, you can contact us by visiting this page on our website: <a href="https://nsu-grad-thesis.netlify.app/">https://nsu-grad-thesis.netlify.app/</a></p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

    <!-- Section 4 -->
    
      <div id= "faqs" class="faqs-container">
        <div class="unknown py-3">
          <h2>Frequently Asked Questions</h2>
        </div>

      <div class="questions-container">
        <div class="content-container">
          <div class="faq-header">
            <h3>What to do if my the ZIP file gets corrupted?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
              ZIP files can get corrupted during the download process due to number of reasons. If you are experiencing issues with a corrupted archived file, please follow the steps below. </br>
              <ul>

                <li>Step 1: Right-click the corrupted archive file (RAR or ZIP file) and select Open with WinRar.

                  <img style='height: 100%; width: 100%; object-fit: cover' class= "center" src="assets/Screenshot(1).png" alt="citation"></li>

                <br><li>Step 2: Close the diagnostic pop up message and click on the Repair button in the tool and choose the repair archiver from the drop-down list that appears.
                  <img style='height: 100%; width: 100%; object-fit: cover' class= "center" src="assets/Screenshot(2).png" alt="citation"></li></br>
                  <img style='height: 100%; width: 100%; object-fit: cover' class= "center" src="assets/Screenshot(3).png" alt="citation"></li></br>


                <br><li>Step 3: After repairing the file, a new dialogue appears; select the location where you want to save the new archive. Click OK.

                  <img style='height: 100%; width: 100%; object-fit: cover' class= "center" src="assets/Screenshot(4).png" alt="citation"></br>

                <br><li>Step 4: When the repair process is finished, navigate to the folder you specified as the location for the new archive and open the repaired file.

                  <img style='height: 100%; width: 100%; object-fit: cover' class= "center" src="assets/Screenshot(5).png" alt="citation"></br>  

            </p>
            </p>
          </div>
        <div class="content-container">
          <div class="faq-header">
            <h3>Why is my reference not working in Texmaker?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
              Please ensure that your quick build command from Options>Configure Texmaker is configured as shown in the screenshot below. Then, click the run button to begin compiling and generating the PDF. <br> Watch the MikTEx <a href="#tutorial">tutorial</a> for more information. </br>
            </p>

            <p>
              <img style='height: 100%; width: 100%; object-fit: cover' class= "center" src="assets/quick-build.png" alt="Quick Build Command">
            </p>
          </div>
        </div>
        <div class="content-container">
          <div class="faq-header">
            <h3>How do you cite in BibTeX?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
              Google Scholar provides automated Bibtex references. Find the article, then go to "cite" and select BibTex from the option below. Copy and paste the BibTex  into your ref.bib file. For in-text citation, go to your desired location and type \cite{label}, where "label" is the label attached to the BibTex you copied (underlined in red as shown below). Follow the highlighted steps as illustrated. <br> Watch the Overleaf <a href="#tutorial">tutorial</a> for more information. </br>
            </p>

            <p>
             <img style='height: 100%; width: 100%; object-fit: cover' class= "center" src="assets/cite.png" alt="citation"> </p>

             <p> <img style='height: 100%; width: 100%; object-fit: cover' class= "center" src="assets/bibTex.png" alt="BibTex"> </p>

             <p> <img style='height: 100%; width: 100%; object-fit: cover' class= "center" src="assets/ref.png" alt="Reference"> </p>
            </p>
          </div>
        </div>
        <div class="content-container">
          <div class="faq-header">
            <h3>How to update the list of Figures/Tables in MS Word?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
              Follow the steps below to update the list of figures/tables:

              <ul>

                <li>Step 1: Add a new figure and insert a caption for it. 
                  <img style='height: 100%; width: 100%; object-fit: cover' class= "center" src="assets/1.png" alt="citation"></li>

                <br><li>Step 2: Go to the list of illustrations and select the entire table. Right click and select "Update Field"
                  <img style='height: 100%; width: 100%; object-fit: cover' class= "center" src="assets/3.png" alt="citation"></li></br>

                <br><li>Step 3:Check "update entire table" and click OK.
                  <img style='height: 100%; width: 100%; object-fit: cover' class= "center" src="assets/4.png" alt="citation"></br>
                  <br>Your list of illustrations will be updated. 
                  <img style='height: 100%; width: 100%; object-fit: cover' class= "center" src="assets/5.png" alt="citation"></li> </ul></br>

                <br>To update the list of tables, repeat the steps above, but this time choose the list of tables and update it after adding a new table to the document.</br>

            </p>
          </div>
        </div>
        <div class="content-container">
          <div class="faq-header">
            <h3>How do I add new chapters to Overleaf/TexMaker?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
              Make a new folder for the new chapter. Make a new file for the new chapter within it. After that, in your main.tex file, inside the "chapter " section, type \include{your new chapter name} command. <br> Watch the Overleaf <a href="#tutorial">tutorial</a> for more information. </br>
            </p>
          </div>
        </div>
        <div class="content-container">
          <div class="faq-header">
            <h3>"This compile didn’t produce a PDF", what should I do?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
              Make sure you have set your Main document from the Menu to main.tex file as shown below. <br> Watch the Overleaf <a href="#tutorial">tutorial</a> for more information. </br> 
            </p>
            <p><img style='height: 100%; width: 100%; object-fit: cover' class= "center" src="assets/main.png" alt="Main.tex file"></p>
          </div>
        </div>
        <div class="content-container">
          <div class="faq-header">
            <h3>Where can I add an abstract, student names and IDS, as well as change the date, title, etc.?</h3>
            <span class="open active">+</span>
            <span class="close">-</span>
          </div>

          <div class="content">
            <p>
              To add an abstract, navigate to the prologue folder and edit the abstarct.tex file with your texts. </p>

            <p>
                Edit the information.tex file to add student names and IDs, supervisor names, and to change the title name.
            </p>
            <p>
              Change the date by going to the core folder and editing the title.tex file.
            </p>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  </main>
  <footer>
    <div id= "Abou" class="container-fluid p-0">
      <div class="row text-center">
        <div class="col-md-12 col-sm-12">
          
          <h4 class="text-light">Contact Us</h4>
          <p class="text-muted">nsu.thesis@gmail.com
          </p>
          <p class="text-muted">
            <span> NSUgrad - 2021 </span>
          </p>
        </div>
        
      
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>