<?php
//change about 
$q5 = "SELECT abouthead FROM admin WHERE id=1";
$q51 = mysqli_query($con,$q5);
$disp = mysqli_fetch_array($q51);
//echo $disp['abouthead'];

$q6 = "SELECT aboutinfor FROM admin WHERE id=1";
$q61 = mysqli_query($con,$q6);
$disp2 = mysqli_fetch_array($q61);


?>
<h1 style="color:#000000"><b><u><center><?php echo $disp['abouthead']; ?></center></u></b></h1>
<p>Way back in 1919, Dr. F.M. North, an American missionary, conceived the idea of developing some educational / vocational institutes in India to train the marginalized young people for their upliftment.   It was in 1926 that Dr. F. M. North's vision came into action and Ingraham Institute on 40 acres of land in a small village of Bekhrabad 2 km-from the Ghaziabad town was purchased.   A Teacher's Training School and a small dispensary was started on this land.    In 1949, a Technical Department was started by Rev J.W. Finny.   Mr. G.C. Pace the First Principal / Director of Ingraham Institute, after serving from 1926 to 1950 handed over his charge to Dr. J. N. Hollister who in 1953 was replaced by Mr. Henry Lacy an American.     In the fall of 1958, Mr. H.A. Lacy, handed over the Directorship of the institute to Mr. Douglous Pickett, who in 1963 established a High School affiliated to U.P. Board.

In 1965, Mr. R.K. Michael, the 1st Indian took over as Director of Ingraham Institute and added a English Medium School up to 12th class affiliated to ICSE along with school for Hearing Impaired children.  He adopted two properties i.e. at 252, G.T. Road Ghaziabad, and Banna Devi- Aligrah.  He also started a high school up to 10th Class on the property of Thermal Power Plant, Kasimpur and a High School at Aligarh.

In the year 1997, Wing Commander Prakash Jethro, took over the reins of Ingraham Institute and continued till 2007 and thereafter again from 2012 to till date, during his tenure the Institute saw multifarious upgradations and developments in the field of finances, academics and infrastructure both at Ghaziabad and Aligarh, at Ghaziabad, the Hindi Medium High School after 40 years was upgraded to 12th and at 252 G.T. Road, Ghaziabad, a Primary School was upgraded to 10+2 with CBSE, a new Polytechnic and a school for Physically & Mentally Challenged children were also started. The Kasimpur School was rejuvenated; besides, a new English Medium School came into existence at Meerut.  His thirst for upgradations and development in the field of academics continued and in the year 2016 a Girl's Degree College was established with all the 3 streams i.e. Science, Commerce and Arts.  The Sports Complex was upgraded with Football, Golf, Tennis & Cricket facilities.

Between 2007 till 2012, Dr. Hepesh Shepherd was appointed as Director, who gave appreciable face-lift to the sports facilities, dairy and agriculture.

Today, under the umbrella of Ingraham Institute, there are 13 schools and colleges including two technical units with Hostel Facilities for both boys and girls, there are approximately 9000 students and above 400 staff.

Supporting Infrastructure:
The Ingraham institute is one of the oldest institutions in Ghaziabad having two campuses covering area about 37 acres; one is Main campus situated on the Hapur Road Ghaziabad having Admin Block and almost 8 units. The second campus is at 252 GT Road Ghaziabad five kilometers away from main campus and it has 3 units including school for hearing impaired and intellectually challenged children. The Institute comprises of Conference Hall, Staff residences, National Bank, Indian Post, own Water Supply system, Centralized Electric Generation facilities, Auditorium with 700 seating capacity, a Dairy Farm and Agriculture Farm within the campus for the benefits of students and staff.</p>
<font size="+1"><?php echo $disp2['aboutinfor']; ?></font>
