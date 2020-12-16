<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillCountry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('AFG','Afghanistan')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ALB','Albania')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('DZA','Algeria')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ASM','American Samoa')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('AND','Andorra')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('AGO','Angola')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('AIA','Anguilla')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ATA','Antarctica')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ATG','Antigua and Barbuda')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ARG','Argentina')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ARM','Armenia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ABW','Aruba')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('AUS','Australia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('AUT','Austria')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('AZE','Azerbaijan')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BHS','Bahamas')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BHR','Bahrain')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BGD','Bangladesh')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BRB','Barbados')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BLR','Belarus')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BEL','Belgium')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BLZ','Belize')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BEN','Benin')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BMU','Bermuda')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BTN','Bhutan')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BOL','Bolivia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BES','Bonaire')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BIH','Bosnia and Herzegovina')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BWA','Botswana')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BVT','Bouvet Island')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BRA','Brazil')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('IOT','British Indian Ocean Territory')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BRN','Brunei Darussalam')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BGR','Bulgaria')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BFA','Burkina Faso')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BDI','Burundi')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('KHM','Cambodia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('CMR','Cameroon')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('CAN','Canada')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('CPV','Cape Verde')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('CYM','Cayman Islands')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('CAF','Central African Republic')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('TCD','Chad')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('CHL','Chile')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('CHN','China')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('CXR','Christmas Island')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('CCK','Cocos (Keeling) Islands')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('COL','Colombia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('COM','Comoros')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('COG','Congo')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('COD','Democratic Republic of the Congo')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('COK','Cook Islands')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('CRI','Costa Rica')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('HRV','Croatia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('CUB','Cuba')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('CUW','Curacao')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('CYP','Cyprus')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('CZE','Czech Republic')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('CIV','Cote d Ivoire')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('DNK','Denmark')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('DJI','Djibouti')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('DMA','Dominica')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('DOM','Dominican Republic')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ECU','Ecuador')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('EGY','Egypt')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SLV','El Salvador')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GNQ','Equatorial Guinea')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ERI','Eritrea')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('EST','Estonia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ETH','Ethiopia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('FLK','Falkland Islands (Malvinas)')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('FRO','Faroe Islands')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('FJI','Fiji')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('FIN','Finland')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('FRA','France')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GUF','French Guiana')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('PYF','French Polynesia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ATF','French Southern Territories')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GAB','Gabon')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GMB','Gambia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GEO','Georgia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`)  VALUES ('DEU','Germany')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GHA','Ghana')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GIB','Gibraltar')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GRC','Greece')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GRL','Greenland')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GRD','Grenada')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GLP','Guadeloupe')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GUM','Guam')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GTM','Guatemala')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GGY','Guernsey')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GIN','Guinea')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GNB','Guinea-Bissau')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GUY','Guyana')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('HTI','Haiti')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('HMD','Heard Island and McDonald Mcdonald Islands')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('VAT','Holy See (Vatican City State)')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('HND','Honduras')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('HKG','Hong Kong')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('HUN','Hungary')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ISL','Iceland')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('IND','India')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('IDN','Indonesia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('IRN','Iran, Islamic Republic of')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('IRQ','Iraq')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('IRL','Ireland')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('IMN','Isle of Man')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ISR','Israel')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ITA','Italy')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('JAM','Jamaica')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('JPN','Japan')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('JEY','Jersey')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('JOR','Jordan')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('KAZ','Kazakhstan')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('KEN','Kenya')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('KIR','Kiribati')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('PRK','Korea, Democratic Peoples Republic of')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('KOR','Korea, Republic of')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('KWT','Kuwait')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('KGZ','Kyrgyzstan')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('LAO','Lao Peoples Democratic Republic')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('LVA','Latvia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('LBN','Lebanon')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('LSO','Lesotho')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('LBR','Liberia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('LBY','Libya')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('LIE','Liechtenstein')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('LTU','Lithuania')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('LUX','Luxembourg')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MAC','Macao')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MKD','Macedonia, the Former Yugoslav Republic of')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MDG','Madagascar')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MWI','Malawi')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MYS','Malaysia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MDV','Maldives')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MLI','Mali')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MLT','Malta')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MHL','Marshall Islands')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MTQ','Martinique')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MRT','Mauritania')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MUS','Mauritius')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MYT','Mayotte')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MEX','Mexico')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('FSM','Micronesia, Federated States of')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MDA','Moldova, Republic of')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MCO','Monaco')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MNG','Mongolia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MNE','Montenegro')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MSR','Montserrat')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MAR','Morocco')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MOZ','Mozambique')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MMR','Myanmar')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('NAM','Namibia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('NRU','Nauru')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('NPL','Nepal')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('NLD','Netherlands')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('NCL','New Caledonia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('NZL','New Zealand')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('NIC','Nicaragua')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('NER','Niger')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('NGA','Nigeria')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('NIU','Niue')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('NFK','Norfolk Island')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MNP','Northern Mariana Islands')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('NOR','Norway')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('OMN','Oman')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('PAK','Pakistan')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('PLW','Palau')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('PSE','Palestine, State of')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('PAN','Panama')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('PNG','Papua New Guinea')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('PRY','Paraguay')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('PER','Peru')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('PHL','Philippines')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('PCN','Pitcairn')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('POL','Poland')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('PRT','Portugal')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('PRI','Puerto Rico')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('QAT','Qatar')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ROU','Romania')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('RUS','Russian Federation')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('RWA','Rwanda')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('REU','Reunion')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('BLM','Saint Barthelemy')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SHN','Saint Helena')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('KNA','Saint Kitts and Nevis')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('LCA','Saint Lucia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('MAF','Saint Martin (French part)')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SPM','Saint Pierre and Miquelon')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('VCT','Saint Vincent and the Grenadines')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('WSM','Samoa')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SMR','San Marino')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('STP','Sao Tome and Principe')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SAU','Saudi Arabia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SEN','Senegal')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SRB','Serbia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SYC','Seychelles')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SLE','Sierra Leone')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SGP','Singapore')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SXM','Sint Maarten (Dutch part)')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SVK','Slovakia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SVN','Slovenia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SLB','Solomon Islands')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SOM','Somalia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ZAF','South Africa')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SGS','South Georgia and the South Sandwich Islands')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SSD','South Sudan')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ESP','Spain')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('LKA','Sri Lanka')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SDN','Sudan')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SUR','Suriname')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SJM','Svalbard and Jan Mayen')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SWZ','Swaziland')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SWE','Sweden')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('CHE','Switzerland')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('SYR','Syrian Arab Republic')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('TWN','Taiwan, Province of China')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('TJK','Tajikistan')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('TZA','United Republic of Tanzania')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('THA','Thailand')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('TLS','Timor-Leste')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('TGO','Togo')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('TKL','Tokelau')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('TON','Tonga')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('TTO','Trinidad and Tobago')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('TUN','Tunisia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('TUR','Turkey')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('TKM','Turkmenistan')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('TCA','Turks and Caicos Islands')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('TUV','Tuvalu')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('UGA','Uganda')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('UKR','Ukraine')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ARE','United Arab Emirates')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('GBR','United Kingdom')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('USA','United States')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('UMI','United States Minor Outlying Islands')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('URY','Uruguay')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('UZB','Uzbekistan')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('VUT','Vanuatu')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('VEN','Venezuela')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('VNM','Viet Nam')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('VGB','British Virgin Islands')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('VIR','US Virgin Islands')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('WLF','Wallis and Futuna')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ESH','Western Sahara')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('YEM','Yemen')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ZMB','Zambia')");
        DB::statement("INSERT INTO `countries` (`code`, `name`) VALUES ('ZWE','Zimbabwe')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('countries', function (Blueprint $table) {
            //
        });
    }
}
