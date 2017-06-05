<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   echo 'Connected successfully';

   mysql_select_db('Carifund');

   #=================dummy entries: cfUsers

   $sql = 'insert into cfUsers (firstname, lastname, email, password)'.
   'values ("Darryl", "Lee", "dt2017@hotmail.com", 14423),'.
   '("Darrow", "Andromedus", "primus@mars.com", 30),'.
   '("Mathew", "Lionheart", "lionMatt@mars.com", 3224);';

   $retval = mysql_query($sql, $conn);
   if(! $retval ) {
        die('Insert cfUsers failed: cfUsers' . mysql_error());
     }

     echo "User added: cfUsers<br>";

   #dummy entry for cfProjects
   
   $sql = 'insert into cfProjects (projectTitle, beneficiary, beneficiaryLocation, donationGoal, donationProgress, projectTags, projectCategory, projectDesc, ownerID, projectImg)'.
   #Health
   'values("Student Mental Health","Malaysian Mental Health Center","Malaysia","4000","300","mental health, students","Health","We trying to get gather some money to do the print outs and also send some representatives into the schools to reach out to students.","CariFund","http://media.npr.org/assets/img/2016/09/16/mental-health-thoughts_sq-3474c5a320990980dd4d052d559dca6527cf1011-s300-c85.jpg"),'.
   '("Diabetes Test","Global Diabetes Help Center","Malaysia","65000","2500","diabetes","Health","We are giving out free diabetes test but we need to gather enough money to bring in the supplies to test diabeties","CariFund","http://cdn.entwellbeing.com.au/wp-content/uploads/2012/10/diabetes-test2.jpg"),'.
   #Poverty
   '("Feeding the Poor","South Sudan Mission Center","South Sudan","50000","14000","food, poor","Poverty","We are sending food supplies that allows the mission center in South Sudan to be able to have enough to supply to the poor","CariFund","http://wearesudan.com/wp-content/uploads/2017/04/South-Sudan-Famine-Investor-in-the-Family.jpg"),'.
   '("Sponsor a child","Mimo Foundation","East Timor","200000","34000","sponsor","Poverty","We are collecting 200 for 1 child to be able to sponsor 1000 child in total. Our sponsorship includes education, shelther and food.","CariFund","http://blog.worldvision.com.au/wp-content/uploads/2015/07/11072040FYA11531.jpg"),'.
   #Education
   '("Books for Orphans","Micky Orphanage","Malaysia","5000","200","books","Education","We are buying enough books for the kids in the orphanage so the school year.","CariFund","http://vbu.ac.in/wp-content/uploads/2015/08/books-2.png"),'.
   '("Building Schools","Mission Education!","Cambodia","60000","1500","school","Education","Gathering enough money to buy enough supplies to build several classrooms in a small town in Cambodia.","CariFund","https://www.primarytimes.net/assets/images/News/United%20World%20Schools.png"),'.
   #Animals
   '("Save the Strays","Litter Box","Malaysia","5000","0","homeless, stray","Animals","We are sending pick up trucks everyday out to find stray animals and give them temporary shelter until someone adopts them. We need the money for petrol and also to buy food for the animals.","CariFund","https://upload.wikimedia.org/wikipedia/commons/e/ef/Stray_dogs-pups.jpg"),'.
   '("Polarized","Bear Foundation","Canada","100000","6000","Polar Bear","Animals","We are funding for a change in the habitat of the Polar Bears by funding enough we can help build a center and have a stationary guard on duty from time to time so that the Polar Bears will be able to live in peace","CariFund","http://animals.sandiegozoo.org/sites/default/files/2016-10/polar_bear_water_snow_0.jpg"),'.
   #Environment
   '("Tree Life","The Green Foundation","Malaysia","8000","0","plant, green","Environment","The Green Foundation is trying to plant more trees in the neighborhood of Subang Jaya. We are in the process of gathering enough funds to buy trees.","CariFund","http://content.lessonplanet.com/articles/photos/1093/iStock_000015647753Small_large.jpg?1335192252"),'.
   '("Recycling for the Future","For Future Organization","Malaysia","1000","250","recycle","Environment","Wanting to promote recycling in Malaysia we decided to print some handouts, so we need to gather enough money for the printing cost.","CariFund","http://www.putnamcountyrecycles.com/portals/5/february-24-recycle-logo.jpg"),'.
   #Other
   '("Fairygod Mother","Hickerys Cancer Center","Malaysia","100000","4500","dream, wish","Other","We want to make dreams come true for the young cancer carriers.","CariFund","http://fm.cnbc.com/applications/cnbc.com/resources/img/editorial/2016/12/16/104172302-AP_888346535725.jpg?v=1481912428"),'.
   '("Project Playground","Lim Family","Malaysia","1800","300","slide", "Other","The Lim family is planning to install a Slide, Swings and 2 goal post in the empty field by making it into a playgroup for the children in the neighbourhood to have a place to play","CariFund","https://previews.123rf.com/images/jackf/jackf1303/jackf130300956/19085099-Wooden-playground-with-metal-slide-Stock-Photo.jpg");';
   
   $retval = mysql_query($sql, $conn);
   if(! $retval ) {
        die('Insert cfprojects failed: cfProjects' . mysql_error());
     }

     echo "Project Added: cfProjects<br>";
   
   mysql_close($conn);
?>
