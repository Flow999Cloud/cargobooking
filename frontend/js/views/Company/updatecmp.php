<?php $this->load->view('includes/head'); ?>
<?php $this->load->view('includes/header'); ?>
<?php if($this->session->userdata('error'))
    {
      $error=$this->session->userdata('error');
        $this->session->unset_userdata('error');
    }
    if($this->session->userdata('success'))
        {
        $success=$this->session->userdata('success');
         $this->session->unset_userdata('success');
        }
    ?> 
<div class="container-fluid top-bg-yellow">
    <div class="row height-margin30">
        
    </div>
   <div class="row">
        <div class="col-md-12 black-bg-outer">
            <div class="row black-bg-title">
                 <h1>Update Company Profile</h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 Jobs-listing-wrapper-outer">
            <div class="row login-wrapper">
                <div class="col-md-3">
                      
                </div>
                <div class="col-md-9">
                    <div class="container-fluid">
                       <?php echo validation_errors(); ?>
                         <div class="row height-margin30"></div>
                        <div class="row height-margin30"></div>
                        <form name="login-from" class="field-form" action="<?php echo site_url('company/updatecmp').'/'.$cmp_detail->cmp_id; ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Company Name*</label>
                                    <input type="text" class="form-control" value="<?php echo $cmp_detail->cmp_name;?>" name="cname">
                                </div>
                           </div>
                            <div class="row">
                               <div class="col-md-5">
                                    <label>Company Category*</label>
                                    <select name="category" class="form-control">
                                     <option value="<?php echo $cmp_detail->cmp_category;?>"><?php echo $cmp_detail->cmp_category; ?></option>
        <option value="Accounting/Taxation">Accounting/Taxation</option>

        <option value="Advertising/PR">Advertising/PR</option>

        <option value="Agriculture/Fertilizer/Pesticide">Agriculture/Fertilizer/Pesticide</option>

        <option value="Apparel/Clothing">Apparel/Clothing</option>

        <option value="Architecture/Interior Design">Architecture/Interior Design</option>

        <option value="Arts / Entertainment">Arts / Entertainment</option>

        <option value="AutoMobile"></option>

        <option value="Aviation">Aviation</option>

        <option value="Banking/Financial Services">Banking/Financial Services</option>

        <option value="BPO">BPO</option>

        <option value="Broadcasting">Broadcasting</option>

        <option value="Business Development">Business Development</option>

        <option value="Call Center">Call Center</option>

        <option value="Chemicals">Chemicals</option>

        <option value="Construction/Cement/Metals">Construction/Cement/Metals</option>

        <option value="Consultants">Consultants</option>

        <option value="Courier/Logistics">Courier/Logistics</option>

        <option value="Distribution and Logistics">Distribution and Logistics</option>

        <option value="Education/Training">Education/Training</option>

        <option value="Electronics">Electronics</option>

        <option value="Engineering">Engineering</option>

        <option value="Event Management">Event Management</option>

        <option value="Fashion">Fashion</option>

        <option value="Fast Moving Consumer Goods (FMCG)">Fast Moving Consumer Goods (FMCG)</option>

        <option value="Food &amp; Beverages">Food &amp; Beverages</option>

        <option value="Gems &amp; Jewelery">Gems &amp; Jewelery</option>

        <option value="Government">Government</option>

        <option value="Health &amp; Fitness">Health &amp; Fitness</option>

        <option value="Healthcare/Hospital/Medical">Healthcare/Hospital/Medical</option>

        <option value="Hospitality">Hospitality</option>

        <option value="Hotel Management / Restaurants">Hotel Management / Restaurants</option>

        <option value="Importers/ Distributors/Exporters">Importers/ Distributors/Exporters</option>

        <option value="Information Technology">Information Technology</option>

        <option value="Insurance / Takaful">Insurance / Takaful</option>

        <option value="Investments">Investments</option>

        <option value="Law Firms/Legal">Law Firms/Legal</option>

        <option value="Manufacturing">Manufacturing</option>

        <option value="Media/Communications">Media/Communications</option>

        <option value="Mining/Oil &amp; Gas/Petroleum">Mining/Oil &amp; Gas/Petroleum</option>

        <option value="N.G.O./Social Services">N.G.O./Social Services</option>

        <option value="Packaging">Packaging</option>

        <option value="Personal Care and Services">Personal Care and Services</option>

        <option value="Pharmaceuticals/Clinical Research">Pharmaceuticals/Clinical Research</option>

        <option value="Power/Energy">Power/Energy</option>

        <option value="Project Management">Project Management</option>

        <option value="Publishing/Printing">Publishing/Printing</option>

        <option value="Real Estate/Property">Real Estate/Property</option>

        <option value="Recruitment/Employment Firms">Recruitment/Employment Firms</option>

        <option value="Retail">Retail</option>

        <option value="Security/Law Enforcement">Security/Law Enforcement</option>

        <option value="Services">Services</option>

        <option value="Shipping/Marine">Shipping/Marine</option>

        <option value="Telecommunication/ISP">Telecommunication/ISP</option>

        <option value="Textiles/Garments">Textiles/Garments</option>

        <option value="Tiles &amp; Ceramics">Tiles &amp; Ceramics</option>

        <option value="Travel/Tourism/Transportation">Travel/Tourism/Transportation</option>
<option value="Warehousing">Warehousing</option>                        
 <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label>Company Location*</label>
                                    <select name="location" class="form-control">
                                        <option value="<?php echo $cmp_detail->cmp_location;?>"><?php echo $cmp_detail->cmp_location;?></option>
                                        <option class="option" value="Abbottabad">Abbottabad</option>
                                                        <option class="option" value="Adezai">Adezai</option>
                                                        <option class="option" value="Ali Bandar">Ali Bandar</option>
                                                        <option class="option" value="Amir Chah">Amir Chah</option>
                                                        <option class="option" value="Attock">Attock</option>
                                                        <option class="option" value="Ayubia">Ayubia</option>
                                                        <option class="option" value="Bahawalpur">Bahawalpur</option>
                                                        <option class="option" value="Baden">Baden</option>
                                                        <option class="option" value="Bagh">Bagh</option>
                                                        <option class="option" value="Bahawalnagar">Bahawalnagar</option>
                                                        <option class="option" value="Burewala">Burewala</option>
                                                        <option class="option" value="Banda Daud Shah">Banda Daud Shah</option>
                                                        <option class="option" value="Bannu district|Bannu">Bannu</option>
                                                        <option class="option" value="Batagram">Batagram</option>
                                                        <option class="option" value="Bazdar">Bazdar</option>
                                                        <option class="option" value="Bela">Bela</option>
                                                        <option class="option" value="Bellpat">Bellpat</option>
                                                        <option class="option" value="Bhag">Bhag</option>
                                                        <option class="option" value="Bhakkar">Bhakkar</option>
                                                        <option class="option" value="Bhalwal">Bhalwal</option>
                                                        <option class="option" value="Bhimber">Bhimber</option>
                                                        <option class="option" value="Birote">Birote</option>
                                                        <option class="option" value="Buner">Buner</option>
                                                        <option class="option" value="Burj">Burj</option>
                                                        <option class="option" value="Chiniot">Chiniot</option>
                                                        <option class="option" value="Chachro">Chachro</option>
                                                        <option class="option" value="Chagai">Chagai</option>
                                                        <option class="option" value="Chah Sandan">Chah Sandan</option>
                                                        <option class="option" value="Chailianwala">Chailianwala</option>
                                                        <option class="option" value="Chakdara">Chakdara</option>
                                                        <option class="option" value="Chakku">Chakku</option>
                                                        <option class="option" value="Chakwal">Chakwal</option>
                                                        <option class="option" value="Chaman">Chaman</option>
                                                        <option class="option" value="Charsadda">Charsadda</option>
                                                        <option class="option" value="Chhatr">Chhatr</option>
                                                        <option class="option" value="Chichawatni">Chichawatni</option>
                                                        <option class="option" value="Chitral">Chitral</option>
                                                        <option class="option" value="Dadu">Dadu</option>
                                                        <option class="option" value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                                        <option class="option" value="Dera Ismail Khan">Dera Ismail Khan</option>
                                                         <option class="option" value="Dalbandin">Dalbandin</option>
                                                        <option class="option" value="Dargai">Dargai</option>
                                                        <option class="option" value="Darya Khan">Darya Khan</option>
                                                        <option class="option" value="Daska">Daska</option>
                                                        <option class="option" value="Dera Bugti">Dera Bugti</option>
                                                        <option class="option" value="Dhana Sar">Dhana Sar</option>
                                                        <option class="option" value="Digri">Digri</option>
                                                        <option class="option" value="Dina City|Dina">Dina</option>
                                                        <option class="option" value="Dinga">Dinga</option>
                                                        <option class="option" value="Diplo, Pakistan|Diplo">Diplo</option>
                                                        <option class="option" value="Diwana">Diwana</option>
                                                        <option class="option" value="Dokri">Dokri</option>
                                                        <option class="option" value="Drosh">Drosh</option>
                                                        <option class="option" value="Duki">Duki</option>
                                                        <option class="option" value="Dushi">Dushi</option>
                                                        <option class="option" value="Duzab">Duzab</option>
                                                        <option class="option" value="Faisalabad">Faisalabad</option>
                                                        <option class="option" value="Fateh Jang">Fateh Jang</option>
                                                        <option class="option" value="Ghotki">Ghotki</option>
                                                        <option class="option" value="Gwadar">Gwadar</option>
                                                        <option class="option" value="Gujranwala">Gujranwala</option>
                                                        <option class="option" value="Gujrat">Gujrat</option>
                                                        <option class="option" value="Gadra">Gadra</option>
                                                        <option class="option" value="Gajar">Gajar</option>
                                                        <option class="option" value="Gandava">Gandava</option>
                                                        <option class="option" value="Garhi Khairo">Garhi Khairo</option>
                                                        <option class="option" value="Garruck">Garruck</option>
                                                        <option class="option" value="Ghakhar Mandi">Ghakhar Mandi</option>
                                                        <option class="option" value="Ghanian">Ghanian</option>
                                                        <option class="option" value="Ghauspur">Ghauspur</option>
                                                        <option class="option" value="Ghazluna">Ghazluna</option>
                                                        <option class="option" value="Girdan">Girdan</option>
                                                        <option class="option" value="Gulistan">Gulistan</option>
                                                        <option class="option" value="Gwash">Gwash</option>
                                                        <option class="option" value="Hyderabad">Hyderabad</option>
                                                        <option class="option" value="Hala">Hala</option>
                                                        <option class="option" value="Haripur">Haripur</option>
                                                        <option class="option" value="Hab Chauki">Hab Chauki</option>
                                                        <option class="option" value="Hafizabad">Hafizabad</option>
                                                        <option class="option" value="Hameedabad">Hameedabad</option>
                                                        <option class="option" value="Hangu">Hangu</option>
                                                        <option class="option" value="Harnai">Harnai</option>
                                                        <option class="option" value="Hasilpur">Hasilpur</option>
                                                        <option class="option" value="Haveli Lakha">Haveli Lakha</option>
                                                        <option class="option" value="Hinglaj">Hinglaj</option>
                                                        <option class="option" value="Hoshab">Hoshab</option>
                                                        <option class="option" value="Islamabad">Islamabad</option>
                                                        <option class="option" value="Islamkot">Islamkot</option>
                                                        <option class="option" value="Ispikan">Ispikan</option>
                                                        <option class="option" value="Jacobabad">Jacobabad</option>
                                                        <option class="option" value="Jamshoro">Jamshoro</option>
                                                        <option class="option" value="Jhang">Jhang</option>
                                                        <option class="option" value="Jhelum">Jhelum</option>
                                                        <option class="option" value="Jamesabad">Jamesabad</option>
                                                        <option class="option" value="Jampur">Jampur</option>
                                                        <option class="option" value="Janghar">Janghar</option>
                                                        <option class="option" value="Jati, Jati(Mughalbhin)">Jati</option>
                                                        <option class="option" value="Jauharabad">Jauharabad</option>
                                                        <option class="option" value="Jhal">Jhal</option>
                                                        <option class="option" value="Jhal Jhao">Jhal Jhao</option>
                                                        <option class="option" value="Jhatpat">Jhatpat</option>
                                                        <option class="option" value="Jhudo">Jhudo</option>
                                                        <option class="option" value="Jiwani">Jiwani</option>
                                                        <option class="option" value="Jungshahi">Jungshahi</option>
                                                        <option class="option" value="Karachi">Karachi</option>
                                                        <option class="option" value="Kotri">Kotri</option>
                                                        <option class="option" value="Kalam">Kalam</option>
                                                        <option class="option" value="Kalandi">Kalandi</option>
                                                        <option class="option" value="Kalat">Kalat</option>
                                                        <option class="option" value="Kamalia">Kamalia</option>
                                                        <option class="option" value="Kamararod">Kamararod</option>
                                                        <option class="option" value="Kamber">Kamber</option>
                                                        <option class="option" value="Kamokey">Kamokey</option>
                                                        <option class="option" value="Kanak">Kanak</option>
                                                        <option class="option" value="Kandi">Kandi</option>
                                                        <option class="option" value="Kandiaro">Kandiaro</option>
                                                        <option class="option" value="Kanpur">Kanpur</option>
                                                        <option class="option" value="Kapip">Kapip</option>
                                                        <option class="option" value="Kappar">Kappar</option>
                                                        <option class="option" value="Karak City">Karak City</option>
                                                        <option class="option" value="Karodi">Karodi</option>
                                                        <option class="option" value="Kashmor">Kashmor</option>
                                                        <option class="option" value="Kasur">Kasur</option>
                                                        <option class="option" value="Katuri">Katuri</option>
                                                        <option class="option" value="Keti Bandar">Keti Bandar</option>
                                                        <option class="option" value="Khairpur">Khairpur</option>
                                                        <option class="option" value="Khanaspur">Khanaspur</option>
                                                        <option class="option" value="Khanewal">Khanewal</option>
                                                        <option class="option" value="Kharan">Kharan</option>
                                                        <option class="option" value="kharian">kharian</option>
                                                        <option class="option" value="Khokhropur">Khokhropur</option>
                                                        <option class="option" value="Khora">Khora</option>
                                                        <option class="option" value="Khushab">Khushab</option>
                                                        <option class="option" value="Khuzdar">Khuzdar</option>
                                                        <option class="option" value="Kikki">Kikki</option>
                                                        <option class="option" value="Klupro">Klupro</option>
                                                        <option class="option" value="Kohan">Kohan</option>
                                                        <option class="option" value="Kohat">Kohat</option>
                                                        <option class="option" value="Kohistan">Kohistan</option>
                                                        <option class="option" value="Kohlu">Kohlu</option>
                                                        <option class="option" value="Korak">Korak</option>
                                                        <option class="option" value="Korangi">Korangi</option>
                                                        <option class="option" value="Kot Sarae">Kot Sarae</option>
                                                        <option class="option" value="Kotli">Kotli</option>
                                                        <option class="option" value="Lahore">Lahore</option>
                                                        <option class="option" value="Larkana">Larkana</option>
                                                        <option class="option" value="Lahri">Lahri</option>
                                                        <option class="option" value="Lakki Marwat">Lakki Marwat</option>
                                                        <option class="option" value="Lasbela">Lasbela</option>
                                                        <option class="option" value="Latamber">Latamber</option>
                                                        <option class="option" value="Layyah">Layyah</option>
                                                        <option class="option" value="Leiah">Leiah</option>
                                                        <option class="option" value="Liari">Liari</option>
                                                        <option class="option" value="Lodhran">Lodhran</option>
                                                        <option class="option" value="Loralai">Loralai</option>
                                                        <option class="option" value="Lower Dir">Lower Dir</option>
                                                        <option class="option" value="Shadan Lund">Shadan Lund</option>
                                                        <option class="option" value="Multan">Multan</option>
                                                        <option class="option" value="Mandi Bahauddin">Mandi Bahauddin</option>
                                                        <option class="option" value="Mansehra">Mansehra</option>
                                                        <option class="option" value="Mian Chanu">Mian Chanu</option>
                                                        <option class="option" value="Mirpur">Mirpur</option>
                                                        <option class="option" value="Moro, Pakistan|Moro">Moro</option>
                                                        <option class="option" value="Mardan">Mardan</option>
                                                        <option class="option" value="Mach">Mach</option>
                                                        <option class="option" value="Madyan">Madyan</option>
                                                        <option class="option" value="Malakand">Malakand</option>
                                                        <option class="option" value="Mand">Mand</option>
                                                        <option class="option" value="Manguchar">Manguchar</option>
                                                        <option class="option" value="Mashki Chah">Mashki Chah</option>
                                                        <option class="option" value="Maslti">Maslti</option>
                                                        <option class="option" value="Mastuj">Mastuj</option>
                                                        <option class="option" value="Mastung">Mastung</option>
                                                        <option class="option" value="Mathi">Mathi</option>
                                                        <option class="option" value="Matiari">Matiari</option>
                                                        <option class="option" value="Mehar">Mehar</option>
                                                        <option class="option" value="Mekhtar">Mekhtar</option>
                                                        <option class="option" value="Merui">Merui</option>
                                                        <option class="option" value="Mianwali">Mianwali</option>
                                                        <option class="option" value="Mianez">Mianez</option>
                                                        <option class="option" value="Mirpur Batoro">Mirpur Batoro</option>
                                                        <option class="option" value="Mirpur Khas">Mirpur Khas</option>
                                                        <option class="option" value="Mirpur Sakro">Mirpur Sakro</option>
                                                        <option class="option" value="Mithi">Mithi</option>
                                                        <option class="option" value="Mongora">Mongora</option>
                                                        <option class="option" value="Murgha Kibzai">Murgha Kibzai</option>
                                                        <option class="option" value="Muridke">Muridke</option>
                                                        <option class="option" value="Musa Khel Bazar">Musa Khel Bazar</option>
                                                        <option class="option" value="Muzaffar Garh">Muzaffar Garh</option>
                                                        <option class="option" value="Muzaffarabad">Muzaffarabad</option>
                                                        <option class="option" value="Nawabshah">Nawabshah</option>
                                                        <option class="option" value="Nazimabad">Nazimabad</option>
                                                        <option class="option" value="Nowshera">Nowshera</option>
                                                        <option class="option" value="Nagar Parkar">Nagar Parkar</option>
                                                        <option class="option" value="Nagha Kalat">Nagha Kalat</option>
                                                        <option class="option" value="Nal">Nal</option>
                                                        <option class="option" value="Naokot">Naokot</option>
                                                        <option class="option" value="Nasirabad">Nasirabad</option>
                                                        <option class="option" value="Nauroz Kalat">Nauroz Kalat</option>
                                                        <option class="option" value="Naushara">Naushara</option>
                                                        <option class="option" value="Nur Gamma">Nur Gamma</option>
                                                        <option class="option" value="Nushki">Nushki</option>
                                                        <option class="option" value="Nuttal">Nuttal</option>
                                                        <option class="option" value="Okara">Okara</option>
                                                        <option class="option" value="Ormara">Ormara</option>
                                                        <option class="option" value="Peshawar">Peshawar</option>
                                                        <option class="option" value="Panjgur">Panjgur</option>
                                                        <option class="option" value="Pasni City">Pasni City</option>
                                                        <option class="option" value="Paharpur">Paharpur</option>
                                                        <option class="option" value="Palantuk">Palantuk</option>
                                                        <option class="option" value="Pendoo">Pendoo</option>
                                                        <option class="option" value="Piharak">Piharak</option>
                                                        <option class="option" value="Pirmahal">Pirmahal</option>
                                                        <option class="option" value="Pishin">Pishin</option>
                                                        <option class="option" value="Plandri">Plandri</option>
                                                        <option class="option" value="Pokran">Pokran</option>
                                                        <option class="option" value="Pounch">Pounch</option>
                                                        <option class="option" value="Quetta">Quetta</option>
                                                        <option class="option" value="Qambar">Qambar</option>
                                                        <option class="option" value="Qamruddin Karez">Qamruddin Karez</option>
                                                        <option class="option" value="Qazi Ahmad">Qazi Ahmad</option>
                                                        <option class="option" value="Qila Abdullah">Qila Abdullah</option>
                                                        <option class="option" value="Qila Ladgasht">Qila Ladgasht</option>
                                                        <option class="option" value="Qila Safed">Qila Safed</option>
                                                        <option class="option" value="Qila Saifullah">Qila Saifullah</option>
                                                        <option class="option" value="Rawalpindi">Rawalpindi</option>
                                                        <option class="option" value="Rabwah">Rabwah</option>
                                                        <option class="option" value="Rahim Yar Khan">Rahim Yar Khan</option>
                                                        <option class="option" value="Rajan Pur">Rajan Pur</option>
                                                        <option class="option" value="Rakhni">Rakhni</option>
                                                        <option class="option" value="Ranipur">Ranipur</option>
                                                        <option class="option" value="Ratodero">Ratodero</option>
                                                        <option class="option" value="Rawalakot">Rawalakot</option>
                                                        <option class="option" value="Renala Khurd">Renala Khurd</option>
                                                        <option class="option" value="Robat Thana">Robat Thana</option>
                                                        <option class="option" value="Rodkhan">Rodkhan</option>
                                                        <option class="option" value="Rohri">Rohri</option>
                                                        <option class="option" value="Sialkot">Sialkot</option>
                                                        <option class="option" value="Sadiqabad">Sadiqabad</option>
                                                        <option class="option" value="Safdar Abad- (Dhaban Singh)">Safdar Abad</option>
                                                        <option class="option" value="Sahiwal">Sahiwal</option>
                                                        <option class="option" value="Saidu Sharif">Saidu Sharif</option>
                                                        <option class="option" value="Saindak">Saindak</option>
                                                        <option class="option" value="Sakrand">Sakrand</option>
                                                        <option class="option" value="Sanjawi">Sanjawi</option>
                                                        <option class="option" value="Sargodha">Sargodha</option>
                                                        <option class="option" value="Saruna">Saruna</option>
                                                        <option class="option" value="Shabaz Kalat">Shabaz Kalat</option>
                                                        <option class="option" value="Shadadkhot">Shadadkhot</option>
                                                        <option class="option" value="Shahbandar">Shahbandar</option>
                                                        <option class="option" value="Shahpur">Shahpur</option>
                                                        <option class="option" value="Shahpur Chakar">Shahpur Chakar</option>
                                                        <option class="option" value="Shakargarh">Shakargarh</option>
                                                        <option class="option" value="Shangla">Shangla</option>
                                                        <option class="option" value="Sharam Jogizai">Sharam Jogizai</option>
                                                        <option class="option" value="Sheikhupura">Sheikhupura</option>
                                                        <option class="option" value="Shikarpur">Shikarpur</option>
                                                        <option class="option" value="Shingar">Shingar</option>
                                                        <option class="option" value="Shorap">Shorap</option>
                                                        <option class="option" value="Sibi">Sibi</option>
                                                        <option class="option" value="Sohawa">Sohawa</option>
                                                        <option class="option" value="Sonmiani">Sonmiani</option>
                                                        <option class="option" value="Sooianwala">Sooianwala</option>
                                                        <option class="option" value="Spezand">Spezand</option>
                                                        <option class="option" value="Spintangi">Spintangi</option>
                                                        <option class="option" value="Sui">Sui</option>
                                                        <option class="option" value="Sujawal">Sujawal</option>
                                                        <option class="option" value="Sukkur">Sukkur</option>
                                                        <option class="option" value="Suntsar">Suntsar</option>
                                                        <option class="option" value="Surab">Surab</option>
                                                        <option class="option" value="Swabi">Swabi</option>
                                                        <option class="option" value="Swat">Swat</option>
                                                        <option class="option" value="Tando Adam">Tando Adam</option>
                                                        <option class="option" value="Tando Bago">Tando Bago</option>
                                                        <option class="option" value="Tangi">Tangi</option>
                                                        <option class="option" value="Tank City">Tank City</option>
                                                        <option class="option" value="Tar Ahamd Rind">Tar Ahamd Rind</option>
                                                        <option class="option" value="Thalo">Thalo</option>
                                                        <option class="option" value="Thatta">Thatta</option>
                                                        <option class="option" value="Toba Tek Singh">Toba Tek Singh</option>
                                                        <option class="option" value="Tordher">Tordher</option>
                                                        <option class="option" value="Tujal">Tujal</option>
                                                        <option class="option" value="Tump">Tump</option>
                                                        <option class="option" value="Turbat">Turbat</option>
                                                        <option class="option" value="Umarao">Umarao</option>
                                                        <option class="option" value="Umarkot">Umarkot</option>
                                                        <option class="option" value="Upper Dir">Upper Dir</option>
                                                        <option class="option" value="Uthal">Uthal</option>
                                                        <option class="option" value="Vehari">Vehari</option>
                                                        <option class="option" value="Veirwaro">Veirwaro</option>
                                                        <option class="option" value="Vitakri">Vitakri</option>
                                                        <option class="option" value="Wadh">Wadh</option>
                                                        <option class="option" value="Wah Cantt">Wah Cantt</option>
                                                        <option class="option" value="Warah">Warah</option>
                                                        <option class="option" value="Washap">Washap</option>
                                                        <option class="option" value="Wasjuk">Wasjuk</option>
                                                        <option class="option" value="Wazirabad">Wazirabad</option>
                                                        <option class="option" value="Yakmach">Yakmach</option>
                                                        <option class="option" value="Zhob">Zhob</option>
                                                        <option class="option" value="Other">Other</option>  
                                    </select>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Company Address*</label>
                                   <textarea name="address" class="form-control" required=""><?php echo $cmp_detail->cmp_office_address;?></textarea>
                                </div>
                                <div class="col-md-5">
                                    <label>Company Detail*</label>
                                 <textarea name="detail" class="form-control" required=""><?php echo $cmp_detail->cmp_detail_summary;?></textarea>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Company Contact*</label>
                                      <input type="text" class="form-control" value="<?php echo $cmp_detail->cmp_contact;?>" name="phone">
                                </div>
                                
                            </div>
                             
                            <div class="row">
                                <input type="submit" name="updatecmp" value="Save" class="btn btn-default form-submit">
                            </div>
                        </form>  
                      
                     
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('includes/footer');
?>


