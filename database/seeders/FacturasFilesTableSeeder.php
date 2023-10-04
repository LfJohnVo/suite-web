<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FacturasFilesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {


        \DB::table('facturas_files')->delete();

        \DB::table('facturas_files')->insert(array(
            0 =>
            array(
                       'pdf' => NULL,
                'xml' => NULL,
                'factura_id' => 1,
                'created_at' => '2022-02-15 15:23:32',
                'updated_at' => '2022-02-15 15:23:32',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => NULL,
            ),
            1 =>
            array(
                       'pdf' => '01-04-20222',
                'xml' => '01-04-20222',
                'factura_id' => 2,
                'created_at' => '2022-03-31 18:12:58',
                'updated_at' => '2022-03-31 18:12:58',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => NULL,
            ),
            2 =>
            array(
                       'pdf' => '01-04-20223',
                'xml' => '01-04-20223',
                'factura_id' => 3,
                'created_at' => '2022-03-31 18:21:11',
                'updated_at' => '2022-03-31 18:21:11',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => NULL,
            ),
            3 =>
            array(
                       'pdf' => '01-04-20224',
                'xml' => '01-04-20224',
                'factura_id' => 4,
                'created_at' => '2022-03-31 18:30:36',
                'updated_at' => '2022-03-31 18:30:36',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => NULL,
            ),
            4 =>
            array(
                       'pdf' => '01-04-20225',
                'xml' => '01-04-20225',
                'factura_id' => 5,
                'created_at' => '2022-03-31 18:32:18',
                'updated_at' => '2022-03-31 18:32:18',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => NULL,
            ),
            5 =>
            array(
                       'pdf' => '08-04-20226CFDI_S000000224.pdf',
                'xml' => '08-04-20226CFDI_S000000224.xml',
                'factura_id' => 6,
                'created_at' => '2022-04-08 08:59:57',
                'updated_at' => '2022-04-08 08:59:58',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            6 =>
            array(
                       'pdf' => '08-04-20227CFDI_S000000397.pdf',
                'xml' => '08-04-20227CFDI_S000000397.xml',
                'factura_id' => 7,
                'created_at' => '2022-04-08 09:12:37',
                'updated_at' => '2022-04-08 09:12:38',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            7 =>
            array(
                       'pdf' => '08-04-20228CFDI_S000000398.pdf',
                'xml' => '08-04-20228CFDI_S000000398.xml',
                'factura_id' => 8,
                'created_at' => '2022-04-08 09:22:51',
                'updated_at' => '2022-04-08 09:22:52',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            8 =>
            array(
                       'pdf' => '08-04-20229CFDI_S000000399.pdf',
                'xml' => '08-04-20229CFDI_S000000399.xml',
                'factura_id' => 9,
                'created_at' => '2022-04-08 09:31:51',
                'updated_at' => '2022-04-08 09:31:52',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            9 =>
            array(
                        'pdf' => '08-04-202210CFDI_S000000400.pdf',
                'xml' => '08-04-202210CFDI_S000000400.xml',
                'factura_id' => 10,
                'created_at' => '2022-04-08 09:39:11',
                'updated_at' => '2022-04-08 09:39:12',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            10 =>
            array(
                        'pdf' => '08-04-202211CFDI_S000000401.pdf',
                'xml' => '08-04-202211CFDI_S000000401.xml',
                'factura_id' => 11,
                'created_at' => '2022-04-08 09:47:56',
                'updated_at' => '2022-04-08 09:47:57',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            11 =>
            array(
                        'pdf' => '08-04-202212CFDI_S000000402.pdf',
                'xml' => '08-04-202212CFDI_S000000402.xml',
                'factura_id' => 12,
                'created_at' => '2022-04-08 13:07:37',
                'updated_at' => '2022-04-08 13:07:38',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            12 =>
            array(
                        'pdf' => '08-04-202213CFDI_S000000403.pdf',
                'xml' => '08-04-202213CFDI_S000000403.xml',
                'factura_id' => 13,
                'created_at' => '2022-04-08 16:43:35',
                'updated_at' => '2022-04-08 16:43:36',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            13 =>
            array(
                        'pdf' => '08-04-202214CFDI_S000000404.pdf',
                'xml' => '08-04-202214CFDI_S000000404.xml',
                'factura_id' => 14,
                'created_at' => '2022-04-08 16:50:43',
                'updated_at' => '2022-04-08 16:50:43',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            14 =>
            array(
                        'pdf' => '08-04-202215CFDI_S000000405.pdf',
                'xml' => '08-04-202215CFDI_S000000405.xml',
                'factura_id' => 15,
                'created_at' => '2022-04-08 16:59:44',
                'updated_at' => '2022-04-08 16:59:45',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            15 =>
            array(
                        'pdf' => '08-04-202216CFDI_S000000411.pdf',
                'xml' => '08-04-202216CFDI_S000000411.xml',
                'factura_id' => 16,
                'created_at' => '2022-04-08 17:13:56',
                'updated_at' => '2022-04-08 17:13:57',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            16 =>
            array(
                        'pdf' => '08-04-202217CFDI_S000000413.pdf',
                'xml' => '08-04-202217CFDI_S000000413.xml',
                'factura_id' => 17,
                'created_at' => '2022-04-08 17:21:27',
                'updated_at' => '2022-04-08 17:21:27',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            17 =>
            array(
                        'pdf' => '08-04-202218CFDI_S000000418.pdf',
                'xml' => '08-04-202218CFDI_S000000418.xml',
                'factura_id' => 18,
                'created_at' => '2022-04-08 17:28:19',
                'updated_at' => '2022-04-08 17:28:20',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            18 =>
            array(
                        'pdf' => '08-04-202219CFDI_S000000439.pdf',
                'xml' => '08-04-202219CFDI_S000000439.xml',
                'factura_id' => 19,
                'created_at' => '2022-04-08 17:33:23',
                'updated_at' => '2022-04-08 17:33:23',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            19 =>
            array(
                        'pdf' => '08-04-202220CFDI_S000000452.pdf',
                'xml' => '08-04-202220CFDI_S000000452.xml',
                'factura_id' => 20,
                'created_at' => '2022-04-08 17:48:55',
                'updated_at' => '2022-04-08 17:48:56',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            20 =>
            array(
                        'pdf' => '08-04-202221CFDI_S000000463.pdf',
                'xml' => '08-04-202221CFDI_S000000463.xml',
                'factura_id' => 21,
                'created_at' => '2022-04-08 17:54:46',
                'updated_at' => '2022-04-08 17:54:46',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            21 =>
            array(
                        'pdf' => '09-04-202222CFDI_S000000481.pdf',
                'xml' => '09-04-202222CFDI_S000000481.xml',
                'factura_id' => 22,
                'created_at' => '2022-04-08 18:11:56',
                'updated_at' => '2022-04-08 18:11:56',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            22 =>
            array(
                        'pdf' => '09-04-202223CFDI_S000000500.pdf',
                'xml' => '09-04-202223CFDI_S000000500.xml',
                'factura_id' => 23,
                'created_at' => '2022-04-08 18:24:04',
                'updated_at' => '2022-04-08 18:24:05',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            23 =>
            array(
                        'pdf' => '11-04-202224CFDI_S000000512.pdf',
                'xml' => '11-04-202224CFDI_S000000512.xml',
                'factura_id' => 24,
                'created_at' => '2022-04-11 17:09:31',
                'updated_at' => '2022-04-11 17:09:32',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            24 =>
            array(
                        'pdf' => '11-04-202225CFDI_S000000522.pdf',
                'xml' => '11-04-202225CFDI_S000000522.xml',
                'factura_id' => 25,
                'created_at' => '2022-04-11 17:23:56',
                'updated_at' => '2022-04-11 17:23:57',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            25 =>
            array(
                        'pdf' => '11-04-202226CFDI_S000000541.pdf',
                'xml' => '11-04-202226CFDI_S000000541.xml',
                'factura_id' => 26,
                'created_at' => '2022-04-11 17:26:50',
                'updated_at' => '2022-04-11 17:26:51',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            26 =>
            array(
                        'pdf' => '11-04-202227CFDI_S000000553.pdf',
                'xml' => '11-04-202227CFDI_S000000553.xml',
                'factura_id' => 27,
                'created_at' => '2022-04-11 17:30:16',
                'updated_at' => '2022-04-11 17:30:17',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            27 =>
            array(
                        'pdf' => '11-04-202228CFDI_S000000566.pdf',
                'xml' => '11-04-202228CFDI_S000000566.xml',
                'factura_id' => 28,
                'created_at' => '2022-04-11 17:37:49',
                'updated_at' => '2022-04-11 17:37:49',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            28 =>
            array(
                        'pdf' => '11-04-202229CFDI_S000000590.pdf',
                'xml' => '11-04-202229CFDI_S000000590.xml',
                'factura_id' => 29,
                'created_at' => '2022-04-11 17:43:37',
                'updated_at' => '2022-04-11 17:43:38',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            29 =>
            array(
                        'pdf' => '11-04-202230CFDI_S000000609.pdf',
                'xml' => '11-04-202230CFDI_S000000609.xml',
                'factura_id' => 30,
                'created_at' => '2022-04-11 17:52:15',
                'updated_at' => '2022-04-11 17:52:15',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            30 =>
            array(
                        'pdf' => '11-04-202231CFDI_S000000623.pdf',
                'xml' => '11-04-202231CFDI_S000000623.xml',
                'factura_id' => 31,
                'created_at' => '2022-04-11 17:55:15',
                'updated_at' => '2022-04-11 17:55:16',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            31 =>
            array(
                        'pdf' => '12-04-202232CFDI_S000000642.pdf',
                'xml' => '12-04-202232CFDI_S000000642.xml',
                'factura_id' => 32,
                'created_at' => '2022-04-11 18:19:49',
                'updated_at' => '2022-04-11 18:19:50',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            32 =>
            array(
                        'pdf' => '12-04-202233CFDI_S000000660.pdf',
                'xml' => '12-04-202233CFDI_S000000660.xml',
                'factura_id' => 33,
                'created_at' => '2022-04-11 18:22:19',
                'updated_at' => '2022-04-11 18:22:20',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            33 =>
            array(
                        'pdf' => '12-04-202234CFDI_S000000693.pdf',
                'xml' => '12-04-202234CFDI_S000000693.xml',
                'factura_id' => 34,
                'created_at' => '2022-04-11 18:26:37',
                'updated_at' => '2022-04-11 18:26:37',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            34 =>
            array(
                        'pdf' => '12-04-202235CFDI_S000000714.pdf',
                'xml' => '12-04-202235CFDI_S000000714.xml',
                'factura_id' => 35,
                'created_at' => '2022-04-11 18:33:50',
                'updated_at' => '2022-04-11 18:33:51',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            35 =>
            array(
                        'pdf' => '12-04-202236CFDI_S000000723.pdf',
                'xml' => '12-04-202236CFDI_S000000723.xml',
                'factura_id' => 36,
                'created_at' => '2022-04-11 18:38:11',
                'updated_at' => '2022-04-11 18:38:12',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            36 =>
            array(
                        'pdf' => '12-04-202237CFDI_S000000742.pdf',
                'xml' => '12-04-202237CFDI_S000000742.xml',
                'factura_id' => 37,
                'created_at' => '2022-04-11 18:42:13',
                'updated_at' => '2022-04-11 18:42:14',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            37 =>
            array(
                        'pdf' => '12-04-202238CFDI_S000000581.pdf',
                'xml' => '12-04-202238CFDI_S000000581.xml',
                'factura_id' => 38,
                'created_at' => '2022-04-12 09:31:31',
                'updated_at' => '2022-04-12 09:31:32',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            38 =>
            array(
                        'pdf' => '12-04-202239CFDI_S000000732.pdf',
                'xml' => '12-04-202239CFDI_S000000732.xml',
                'factura_id' => 39,
                'created_at' => '2022-04-12 10:16:16',
                'updated_at' => '2022-04-12 10:16:17',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            39 =>
            array(
                        'pdf' => '12-04-202240CFDI_S000000749.pdf',
                'xml' => '12-04-202240CFDI_S000000749.xml',
                'factura_id' => 40,
                'created_at' => '2022-04-12 10:17:53',
                'updated_at' => '2022-04-12 10:17:54',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            40 =>
            array(
                        'pdf' => '12-04-202241CFDI_S000000689.pdf',
                'xml' => '12-04-202241CFDI_S000000689.xml',
                'factura_id' => 41,
                'created_at' => '2022-04-12 12:36:23',
                'updated_at' => '2022-04-12 12:36:24',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            41 =>
            array(
                        'pdf' => '12-04-202242CFDI_S000000717.pdf',
                'xml' => '12-04-202242CFDI_S000000717.xml',
                'factura_id' => 42,
                'created_at' => '2022-04-12 13:11:33',
                'updated_at' => '2022-04-12 13:11:34',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            42 =>
            array(
                        'pdf' => '12-04-202243CFDI_S000000719.pdf',
                'xml' => '12-04-202243CFDI_S000000719.xml',
                'factura_id' => 43,
                'created_at' => '2022-04-12 13:18:53',
                'updated_at' => '2022-04-12 13:18:53',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            43 =>
            array(
                        'pdf' => '12-04-202244CFDI_S000000735.pdf',
                'xml' => '12-04-202244CFDI_S000000735.xml',
                'factura_id' => 44,
                'created_at' => '2022-04-12 13:42:45',
                'updated_at' => '2022-04-12 13:42:46',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            44 =>
            array(
                        'pdf' => '12-04-202245CFDI_S000000738.pdf',
                'xml' => '12-04-202245CFDI_S000000738.xml',
                'factura_id' => 45,
                'created_at' => '2022-04-12 13:44:02',
                'updated_at' => '2022-04-12 13:44:03',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            45 =>
            array(
                        'pdf' => '12-04-202246CFDI_S000000739.pdf',
                'xml' => '12-04-202246CFDI_S000000739.xml',
                'factura_id' => 46,
                'created_at' => '2022-04-12 13:54:32',
                'updated_at' => '2022-04-12 13:54:32',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            46 =>
            array(
                        'pdf' => '12-04-202247CFDI_S000000740.pdf',
                'xml' => '12-04-202247CFDI_S000000740.xml',
                'factura_id' => 47,
                'created_at' => '2022-04-12 14:03:23',
                'updated_at' => '2022-04-12 14:03:24',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            47 =>
            array(
                        'pdf' => '13-04-202248CFDI_S000000585.pdf',
                'xml' => '13-04-202248CFDI_S000000585.xml',
                'factura_id' => 48,
                'created_at' => '2022-04-13 09:29:55',
                'updated_at' => '2022-04-13 09:29:55',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            48 =>
            array(
                        'pdf' => '13-04-202249CFDI_S000000586.pdf',
                'xml' => '13-04-202249CFDI_S000000586.xml',
                'factura_id' => 49,
                'created_at' => '2022-04-13 09:34:28',
                'updated_at' => '2022-04-13 09:34:28',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            49 =>
            array(
                        'pdf' => '13-04-202250CFDI_S000000587.pdf',
                'xml' => '13-04-202250CFDI_S000000587.xml',
                'factura_id' => 50,
                'created_at' => '2022-04-13 09:44:10',
                'updated_at' => '2022-04-13 09:44:10',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            50 =>
            array(
                        'pdf' => '13-04-202251CFDI_S000000636.pdf',
                'xml' => '13-04-202251CFDI_S000000636.xml',
                'factura_id' => 51,
                'created_at' => '2022-04-13 09:50:44',
                'updated_at' => '2022-04-13 09:50:45',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            51 =>
            array(
                        'pdf' => '13-04-202252CFDI_S000000637.pdf',
                'xml' => '13-04-202252CFDI_S000000637.xml',
                'factura_id' => 52,
                'created_at' => '2022-04-13 09:57:56',
                'updated_at' => '2022-04-13 09:57:57',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            52 =>
            array(
                        'pdf' => '13-04-202253CFDI_S000000638.pdf',
                'xml' => '13-04-202253CFDI_S000000638.xml',
                'factura_id' => 53,
                'created_at' => '2022-04-13 10:05:58',
                'updated_at' => '2022-04-13 10:05:58',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            53 =>
            array(
                        'pdf' => '13-04-202254CFDI_S000000653.pdf',
                'xml' => '13-04-202254CFDI_S000000653.xml',
                'factura_id' => 54,
                'created_at' => '2022-04-13 10:15:37',
                'updated_at' => '2022-04-13 10:15:38',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            54 =>
            array(
                        'pdf' => '13-04-202255CFDI_S000000669.pdf',
                'xml' => '13-04-202255CFDI_S000000669.xml',
                'factura_id' => 55,
                'created_at' => '2022-04-13 10:21:42',
                'updated_at' => '2022-04-13 10:21:43',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            55 =>
            array(
                        'pdf' => '13-04-202256CFDI_S000000670.pdf',
                'xml' => '13-04-202256CFDI_S000000670.xml',
                'factura_id' => 56,
                'created_at' => '2022-04-13 10:29:33',
                'updated_at' => '2022-04-13 10:29:33',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            56 =>
            array(
                        'pdf' => '13-04-202257CFDI_S000000671.pdf',
                'xml' => '13-04-202257CFDI_S000000671.xml',
                'factura_id' => 57,
                'created_at' => '2022-04-13 10:33:08',
                'updated_at' => '2022-04-13 10:33:09',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            57 =>
            array(
                        'pdf' => '13-04-202258CFDI_S000000672.pdf',
                'xml' => '13-04-202258CFDI_S000000672.xml',
                'factura_id' => 58,
                'created_at' => '2022-04-13 10:37:04',
                'updated_at' => '2022-04-13 10:37:05',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            58 =>
            array(
                        'pdf' => '13-04-202259CFDI_S000000673.pdf',
                'xml' => '13-04-202259CFDI_S000000673.xml',
                'factura_id' => 59,
                'created_at' => '2022-04-13 10:40:07',
                'updated_at' => '2022-04-13 10:40:08',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            59 =>
            array(
                        'pdf' => '13-04-202260CFDI_S000000680.pdf',
                'xml' => '13-04-202260CFDI_S000000680.xml',
                'factura_id' => 60,
                'created_at' => '2022-04-13 10:44:54',
                'updated_at' => '2022-04-13 10:44:55',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            60 =>
            array(
                        'pdf' => '13-04-202261CFDI_S000000736.pdf',
                'xml' => '13-04-202261CFDI_S000000736.xml',
                'factura_id' => 61,
                'created_at' => '2022-04-13 10:51:35',
                'updated_at' => '2022-04-13 10:51:36',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            61 =>
            array(
                        'pdf' => '13-04-202262CFDI_S000000747.pdf',
                'xml' => '13-04-202262CFDI_S000000747.xml',
                'factura_id' => 62,
                'created_at' => '2022-04-13 10:55:51',
                'updated_at' => '2022-04-13 10:55:52',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            62 =>
            array(
                        'pdf' => NULL,
                'xml' => NULL,
                'factura_id' => 63,
                'created_at' => '2022-04-19 12:24:25',
                'updated_at' => '2022-04-19 12:24:25',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => NULL,
            ),
            63 =>
            array(
                        'pdf' => '26-04-202264CFDI_S000000454.pdf',
                'xml' => '26-04-202264CFDI_S000000454.xml',
                'factura_id' => 64,
                'created_at' => '2022-04-26 11:12:39',
                'updated_at' => '2022-04-26 11:12:40',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            64 =>
            array(
                        'pdf' => '26-04-202265CFDI_S000000455.pdf',
                'xml' => '26-04-202265CFDI_S000000455.xml',
                'factura_id' => 65,
                'created_at' => '2022-04-26 11:18:47',
                'updated_at' => '2022-04-26 11:18:47',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            65 =>
            array(
                        'pdf' => '26-04-202266CFDI_S000000456.pdf',
                'xml' => '26-04-202266CFDI_S000000456.xml',
                'factura_id' => 66,
                'created_at' => '2022-04-26 11:25:42',
                'updated_at' => '2022-04-26 11:25:43',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            66 =>
            array(
                        'pdf' => '26-04-202267CFDI_S000000457.pdf',
                'xml' => '26-04-202267CFDI_S000000457.xml',
                'factura_id' => 67,
                'created_at' => '2022-04-26 11:35:18',
                'updated_at' => '2022-04-26 11:35:20',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            67 =>
            array(
                        'pdf' => '26-04-202268CFDI_S000000460.pdf',
                'xml' => '26-04-202268CFDI_S000000460.xml',
                'factura_id' => 68,
                'created_at' => '2022-04-26 11:40:30',
                'updated_at' => '2022-04-26 11:40:31',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            68 =>
            array(
                        'pdf' => '26-04-202269CFDI_S000000475.pdf',
                'xml' => '26-04-202269CFDI_S000000475.xml',
                'factura_id' => 69,
                'created_at' => '2022-04-26 11:53:03',
                'updated_at' => '2022-04-26 11:53:04',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            69 =>
            array(
                        'pdf' => '26-04-202270CFDI_S000000483Cancelada.pdf',
                'xml' => '26-04-202270CFDI_S000000483.xml',
                'factura_id' => 70,
                'created_at' => '2022-04-26 11:59:34',
                'updated_at' => '2022-04-26 11:59:35',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            70 =>
            array(
                        'pdf' => '26-04-202271CFDI_S000000510.pdf',
                'xml' => '26-04-202271CFDI_S000000510.xml',
                'factura_id' => 71,
                'created_at' => '2022-04-26 12:10:23',
                'updated_at' => '2022-04-26 12:10:24',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            71 =>
            array(
                        'pdf' => '26-04-202272CFDI_S000000518.pdf',
                'xml' => '26-04-202272CFDI_S000000518.xml',
                'factura_id' => 72,
                'created_at' => '2022-04-26 12:20:03',
                'updated_at' => '2022-04-26 12:20:03',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            72 =>
            array(
                        'pdf' => '26-04-202273CFDI_S000000532.pdf',
                'xml' => '26-04-202273CFDI_S000000532.xml',
                'factura_id' => 73,
                'created_at' => '2022-04-26 12:26:56',
                'updated_at' => '2022-04-26 12:26:57',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            73 =>
            array(
                        'pdf' => '26-04-202274CFDI_S000000533Cancelada.pdf',
                'xml' => '26-04-202274CFDI_S000000533.xml',
                'factura_id' => 74,
                'created_at' => '2022-04-26 12:33:39',
                'updated_at' => '2022-04-26 12:33:40',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            74 =>
            array(
                        'pdf' => '26-04-202275CFDI_S000000547.pdf',
                'xml' => '26-04-202275CFDI_S000000547.xml',
                'factura_id' => 75,
                'created_at' => '2022-04-26 12:42:52',
                'updated_at' => '2022-04-26 12:42:53',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            75 =>
            array(
                        'pdf' => '26-04-202276CFDI_S000000559.pdf',
                'xml' => '26-04-202276CFDI_S000000559.xml',
                'factura_id' => 76,
                'created_at' => '2022-04-26 12:50:24',
                'updated_at' => '2022-04-26 12:50:25',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            76 =>
            array(
                        'pdf' => '26-04-202277CFDI_S000000578.pdf',
                'xml' => '26-04-202277CFDI_S000000578.xml',
                'factura_id' => 77,
                'created_at' => '2022-04-26 12:54:57',
                'updated_at' => '2022-04-26 12:54:58',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            77 =>
            array(
                        'pdf' => '26-04-202278CFDI_S000000605.pdf',
                'xml' => '26-04-202278CFDI_S000000605.xml',
                'factura_id' => 78,
                'created_at' => '2022-04-26 13:01:00',
                'updated_at' => '2022-04-26 13:01:01',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            78 =>
            array(
                        'pdf' => '26-04-202279CFDI_S000000614.pdf',
                'xml' => '26-04-202279CFDI_S000000614.xml',
                'factura_id' => 79,
                'created_at' => '2022-04-26 13:09:04',
                'updated_at' => '2022-04-26 13:09:05',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            79 =>
            array(
                        'pdf' => '26-04-202280CFDI_S000000631.pdf',
                'xml' => '26-04-202280CFDI_S000000631.xml',
                'factura_id' => 80,
                'created_at' => '2022-04-26 13:35:19',
                'updated_at' => '2022-04-26 13:35:20',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            80 =>
            array(
                        'pdf' => '26-04-202281CFDI_S000000654.pdf',
                'xml' => '26-04-202281CFDI_S000000654.xml',
                'factura_id' => 81,
                'created_at' => '2022-04-26 13:52:45',
                'updated_at' => '2022-04-26 13:52:46',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            81 =>
            array(
                        'pdf' => '26-04-202282CFDI_S000000703.pdf',
                'xml' => '26-04-202282CFDI_S000000703.xml',
                'factura_id' => 82,
                'created_at' => '2022-04-26 13:58:28',
                'updated_at' => '2022-04-26 13:58:29',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            82 =>
            array(
                        'pdf' => '26-04-202283CFDI_S000000720.pdf',
                'xml' => '26-04-202283CFDI_S000000720.xml',
                'factura_id' => 83,
                'created_at' => '2022-04-26 14:03:23',
                'updated_at' => '2022-04-26 14:03:24',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            83 =>
            array(
                        'pdf' => '26-04-202284CFDI_S000000733.pdf',
                'xml' => '26-04-202284CFDI_S000000733.xml',
                'factura_id' => 84,
                'created_at' => '2022-04-26 14:06:52',
                'updated_at' => '2022-04-26 14:06:53',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            84 =>
            array(
                        'pdf' => '26-04-202285CFDI_S000000757.pdf',
                'xml' => '26-04-202285CFDI_S000000757.xml',
                'factura_id' => 85,
                'created_at' => '2022-04-26 14:09:47',
                'updated_at' => '2022-04-26 14:09:48',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            85 =>
            array(
                        'pdf' => '26-04-202286CFDI_S000000758.pdf',
                'xml' => '26-04-202286CFDI_S000000758.xml',
                'factura_id' => 86,
                'created_at' => '2022-04-26 14:20:00',
                'updated_at' => '2022-04-26 14:20:01',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            86 =>
            array(
                        'pdf' => '26-04-202287CFDI_S000000782.pdf',
                'xml' => '26-04-202287CFDI_S000000782.xml',
                'factura_id' => 87,
                'created_at' => '2022-04-26 14:23:50',
                'updated_at' => '2022-04-26 14:23:51',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            87 =>
            array(
                        'pdf' => '29-04-202288CFDI_S000000180.pdf',
                'xml' => '29-04-202288CFDI_S000000180.xml',
                'factura_id' => 88,
                'created_at' => '2022-04-29 09:03:46',
                'updated_at' => '2022-04-29 09:03:47',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            88 =>
            array(
                        'pdf' => '29-04-202289CFDI_S000000200.pdf',
                'xml' => '29-04-202289CFDI_S000000200.xml',
                'factura_id' => 89,
                'created_at' => '2022-04-29 09:31:09',
                'updated_at' => '2022-04-29 09:31:10',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            89 =>
            array(
                        'pdf' => '29-04-202290CFDI_S000000258.pdf',
                'xml' => '29-04-202290CFDI_S000000258.xml',
                'factura_id' => 90,
                'created_at' => '2022-04-29 09:46:20',
                'updated_at' => '2022-04-29 09:46:21',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            90 =>
            array(
                        'pdf' => '29-04-202291CFDI_S000000259.pdf',
                'xml' => '29-04-202291CFDI_S000000259.xml',
                'factura_id' => 91,
                'created_at' => '2022-04-29 09:48:56',
                'updated_at' => '2022-04-29 09:48:57',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            91 =>
            array(
                        'pdf' => '29-04-202292CFDI_S000000259.pdf',
                'xml' => '29-04-202292CFDI_S000000259.xml',
                'factura_id' => 92,
                'created_at' => '2022-04-29 09:53:53',
                'updated_at' => '2022-04-29 09:53:54',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            92 =>
            array(
                        'pdf' => '29-04-202293CFDI_S000000279.pdf',
                'xml' => '29-04-202293CFDI_S000000279.xml',
                'factura_id' => 93,
                'created_at' => '2022-04-29 10:08:15',
                'updated_at' => '2022-04-29 10:08:16',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            93 =>
            array(
                        'pdf' => '29-04-202294CFDI_S000000280.pdf',
                'xml' => '29-04-202294CFDI_S000000280.xml',
                'factura_id' => 94,
                'created_at' => '2022-04-29 10:17:31',
                'updated_at' => '2022-04-29 10:17:32',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            94 =>
            array(
                        'pdf' => '29-04-202295CFDI_S000000281.pdf',
                'xml' => '29-04-202295CFDI_S000000281.xml',
                'factura_id' => 95,
                'created_at' => '2022-04-29 10:25:02',
                'updated_at' => '2022-04-29 10:25:03',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            95 =>
            array(
                        'pdf' => '29-04-202296CFDI_S000000295.pdf',
                'xml' => '29-04-202296CFDI_S000000295.xml',
                'factura_id' => 96,
                'created_at' => '2022-04-29 13:06:48',
                'updated_at' => '2022-04-29 13:06:49',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            96 =>
            array(
                        'pdf' => '29-04-202297CFDI_S000000302.pdf',
                'xml' => '29-04-202297CFDI_S000000302.xml',
                'factura_id' => 97,
                'created_at' => '2022-04-29 14:01:24',
                'updated_at' => '2022-04-29 14:01:25',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            97 =>
            array(
                        'pdf' => '29-04-202298CFDI_S000000317.pdf',
                'xml' => '29-04-202298CFDI_S000000317.xml',
                'factura_id' => 98,
                'created_at' => '2022-04-29 14:18:50',
                'updated_at' => '2022-04-29 14:18:51',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            98 =>
            array(
                        'pdf' => '29-04-202299CFDI_S000000332.pdf',
                'xml' => '29-04-202299CFDI_S000000332.xml',
                'factura_id' => 99,
                'created_at' => '2022-04-29 14:23:21',
                'updated_at' => '2022-04-29 14:23:22',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            99 =>
            array(

                'pdf' => '29-04-2022100CFDI_S000000333.pdf',
                'xml' => '29-04-2022100CFDI_S000000333.xml',
                'factura_id' => 100,
                'created_at' => '2022-04-29 14:25:01',
                'updated_at' => '2022-04-29 14:25:02',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            100 =>
            array(

                'pdf' => '29-04-2022101CFDI_S000000359.pdf',
                'xml' => '29-04-2022101CFDI_S000000359.xml',
                'factura_id' => 101,
                'created_at' => '2022-04-29 14:29:42',
                'updated_at' => '2022-04-29 14:29:43',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            101 =>
            array(

                'pdf' => '29-04-2022102CFDI_S000000381.pdf',
                'xml' => '29-04-2022102CFDI_S000000381.xml',
                'factura_id' => 102,
                'created_at' => '2022-04-29 14:31:26',
                'updated_at' => '2022-04-29 14:31:27',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            102 =>
            array(

                'pdf' => '29-04-2022103CFDI_S000000386.pdf',
                'xml' => '29-04-2022103CFDI_S000000386.xml',
                'factura_id' => 103,
                'created_at' => '2022-04-29 14:39:59',
                'updated_at' => '2022-04-29 14:40:00',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            103 =>
            array(

                'pdf' => '29-04-2022104CFDI_S000000391.pdf',
                'xml' => '29-04-2022104CFDI_S000000391.xml',
                'factura_id' => 104,
                'created_at' => '2022-04-29 14:48:39',
                'updated_at' => '2022-04-29 14:48:40',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            104 =>
            array(

                'pdf' => '29-04-2022105CFDI_S000000409.pdf',
                'xml' => '29-04-2022105CFDI_S000000409.xml',
                'factura_id' => 105,
                'created_at' => '2022-04-29 14:54:52',
                'updated_at' => '2022-04-29 14:54:53',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            105 =>
            array(

                'pdf' => '29-04-2022106CFDI_S000000414.pdf',
                'xml' => '29-04-2022106CFDI_S000000414.xml',
                'factura_id' => 106,
                'created_at' => '2022-04-29 14:59:54',
                'updated_at' => '2022-04-29 14:59:55',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            106 =>
            array(

                'pdf' => '29-04-2022107CFDI_S000000422.pdf',
                'xml' => '29-04-2022107CFDI_S000000422.xml',
                'factura_id' => 107,
                'created_at' => '2022-04-29 15:01:21',
                'updated_at' => '2022-04-29 15:01:22',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            107 =>
            array(

                'pdf' => '29-04-2022108CFDI_S000000442.pdf',
                'xml' => '29-04-2022108CFDI_S000000442.xml',
                'factura_id' => 108,
                'created_at' => '2022-04-29 15:03:18',
                'updated_at' => '2022-04-29 15:03:19',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            108 =>
            array(

                'pdf' => '29-04-2022109CFDI_S000000450.pdf',
                'xml' => '29-04-2022109CFDI_S000000450.xml',
                'factura_id' => 109,
                'created_at' => '2022-04-29 15:08:41',
                'updated_at' => '2022-04-29 15:08:42',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            109 =>
            array(

                'pdf' => '29-04-2022110CFDI_S000000466.pdf',
                'xml' => '29-04-2022110CFDI_S000000466.xml',
                'factura_id' => 110,
                'created_at' => '2022-04-29 15:10:22',
                'updated_at' => '2022-04-29 15:10:23',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            110 =>
            array(

                'pdf' => '29-04-2022111CFDI_S000000473.pdf',
                'xml' => '29-04-2022111CFDI_S000000473.xml',
                'factura_id' => 111,
                'created_at' => '2022-04-29 15:50:07',
                'updated_at' => '2022-04-29 15:50:08',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            111 =>
            array(

                'pdf' => '29-04-2022112CFDI_S000000479.pdf',
                'xml' => '29-04-2022112CFDI_S000000479.xml',
                'factura_id' => 112,
                'created_at' => '2022-04-29 15:51:53',
                'updated_at' => '2022-04-29 15:51:54',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            112 =>
            array(

                'pdf' => '29-04-2022113CFDI_S000000507.pdf',
                'xml' => '29-04-2022113CFDI_S000000507.xml',
                'factura_id' => 113,
                'created_at' => '2022-04-29 15:57:35',
                'updated_at' => '2022-04-29 15:57:35',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            113 =>
            array(

                'pdf' => '29-04-2022114CFDI_S000000507.pdf',
                'xml' => '29-04-2022114CFDI_S000000507.xml',
                'factura_id' => 114,
                'created_at' => '2022-04-29 16:07:25',
                'updated_at' => '2022-04-29 16:07:26',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            114 =>
            array(

                'pdf' => '29-04-2022115CFDI_S000000529.pdf',
                'xml' => '29-04-2022115CFDI_S000000529.xml',
                'factura_id' => 115,
                'created_at' => '2022-04-29 16:09:02',
                'updated_at' => '2022-04-29 16:09:03',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            115 =>
            array(

                'pdf' => '29-04-2022116CFDI_S000000544.pdf',
                'xml' => '29-04-2022116CFDI_S000000544.xml',
                'factura_id' => 116,
                'created_at' => '2022-04-29 16:11:16',
                'updated_at' => '2022-04-29 16:11:17',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            116 =>
            array(

                'pdf' => '29-04-2022117CFDI_S000000551.pdf',
                'xml' => '29-04-2022117CFDI_S000000551.xml',
                'factura_id' => 117,
                'created_at' => '2022-04-29 16:17:41',
                'updated_at' => '2022-04-29 16:17:42',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            117 =>
            array(

                'pdf' => '29-04-2022118CFDI_S000000567.pdf',
                'xml' => '29-04-2022118CFDI_S000000567.xml',
                'factura_id' => 118,
                'created_at' => '2022-04-29 16:21:46',
                'updated_at' => '2022-04-29 16:21:47',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            118 =>
            array(

                'pdf' => '29-04-2022119CFDI_S000000593.pdf',
                'xml' => '29-04-2022119CFDI_S000000593.xml',
                'factura_id' => 119,
                'created_at' => '2022-04-29 16:23:00',
                'updated_at' => '2022-04-29 16:23:01',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            119 =>
            array(

                'pdf' => '29-04-2022120CFDI_S000000593.pdf',
                'xml' => '29-04-2022120CFDI_S000000593.xml',
                'factura_id' => 120,
                'created_at' => '2022-04-29 16:25:36',
                'updated_at' => '2022-04-29 16:25:37',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            120 =>
            array(

                'pdf' => '29-04-2022121CFDI_S000000607.pdf',
                'xml' => '29-04-2022121CFDI_S000000607.xml',
                'factura_id' => 121,
                'created_at' => '2022-04-29 16:27:22',
                'updated_at' => '2022-04-29 16:27:23',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            121 =>
            array(

                'pdf' => '29-04-2022122CFDI_S000000626.pdf',
                'xml' => '29-04-2022122CFDI_S000000626.xml',
                'factura_id' => 122,
                'created_at' => '2022-04-29 16:30:43',
                'updated_at' => '2022-04-29 16:30:45',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            122 =>
            array(

                'pdf' => '29-04-2022123CFDI_S000000644.pdf',
                'xml' => '29-04-2022123CFDI_S000000644.xml',
                'factura_id' => 123,
                'created_at' => '2022-04-29 16:33:30',
                'updated_at' => '2022-04-29 16:33:31',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            123 =>
            array(

                'pdf' => '29-04-2022124CFDI_S000000666.pdf',
                'xml' => '29-04-2022124CFDI_S000000666.xml',
                'factura_id' => 124,
                'created_at' => '2022-04-29 16:35:32',
                'updated_at' => '2022-04-29 16:35:33',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            124 =>
            array(

                'pdf' => '29-04-2022125CFDI_S000000678.pdf',
                'xml' => '29-04-2022125CFDI_S000000678.xml',
                'factura_id' => 125,
                'created_at' => '2022-04-29 16:36:55',
                'updated_at' => '2022-04-29 16:36:55',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            125 =>
            array(

                'pdf' => '29-04-2022126CFDI_S000000677.pdf',
                'xml' => '29-04-2022126CFDI_S000000677.xml',
                'factura_id' => 126,
                'created_at' => '2022-04-29 16:39:41',
                'updated_at' => '2022-04-29 16:39:41',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            126 =>
            array(

                'pdf' => '29-04-2022127CFDI_S000000727.pdf',
                'xml' => '29-04-2022127CFDI_S000000727.xml',
                'factura_id' => 127,
                'created_at' => '2022-04-29 16:42:44',
                'updated_at' => '2022-04-29 16:42:44',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            127 =>
            array(

                'pdf' => '29-04-2022128CFDI_S000000748.pdf',
                'xml' => '29-04-2022128CFDI_S000000748.xml',
                'factura_id' => 128,
                'created_at' => '2022-04-29 16:44:20',
                'updated_at' => '2022-04-29 16:44:21',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            128 =>
            array(

                'pdf' => '29-04-2022129CFDI_S000000765.pdf',
                'xml' => '29-04-2022129CFDI_S000000765.xml',
                'factura_id' => 129,
                'created_at' => '2022-04-29 16:47:32',
                'updated_at' => '2022-04-29 16:47:33',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            129 =>
            array(

                'pdf' => '02-05-2022130CFDI_S000000511.pdf',
                'xml' => '02-05-2022130CFDI_S000000511.xml',
                'factura_id' => 130,
                'created_at' => '2022-05-02 08:51:44',
                'updated_at' => '2022-05-02 09:23:06',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            130 =>
            array(

                'pdf' => '02-05-2022131CFDI_S000000513.pdf',
                'xml' => '02-05-2022131CFDI_S000000513.xml',
                'factura_id' => 131,
                'created_at' => '2022-05-02 09:00:45',
                'updated_at' => '2022-05-02 09:23:29',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            131 =>
            array(

                'pdf' => '02-05-2022132CFDI_S000000531.pdf',
                'xml' => '02-05-2022132CFDI_S000000531.xml',
                'factura_id' => 132,
                'created_at' => '2022-05-02 09:07:39',
                'updated_at' => '2022-05-02 09:07:40',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            132 =>
            array(

                'pdf' => '02-05-2022133CFDI_S000000556.pdf',
                'xml' => '02-05-2022133CFDI_S000000556.xml',
                'factura_id' => 133,
                'created_at' => '2022-05-02 09:18:15',
                'updated_at' => '2022-05-02 09:18:16',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            133 =>
            array(

                'pdf' => '02-05-2022134CFDI_S000000531.pdf',
                'xml' => '02-05-2022134CFDI_S000000531.xml',
                'factura_id' => 134,
                'created_at' => '2022-05-02 09:27:52',
                'updated_at' => '2022-05-02 09:27:52',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            134 =>
            array(

                'pdf' => '02-05-2022135CFDI_S000000556.pdf',
                'xml' => '02-05-2022135CFDI_S000000556.xml',
                'factura_id' => 135,
                'created_at' => '2022-05-02 09:35:45',
                'updated_at' => '2022-05-02 09:35:46',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            135 =>
            array(

                'pdf' => '02-05-2022136CFDI_S000000557.pdf',
                'xml' => '02-05-2022136CFDI_S000000557.xml',
                'factura_id' => 136,
                'created_at' => '2022-05-02 09:53:45',
                'updated_at' => '2022-05-02 09:53:46',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            136 =>
            array(

                'pdf' => '02-05-2022137CFDI_S000000570.pdf',
                'xml' => '02-05-2022137CFDI_S000000570.xml',
                'factura_id' => 137,
                'created_at' => '2022-05-02 10:01:13',
                'updated_at' => '2022-05-02 10:01:14',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            137 =>
            array(

                'pdf' => '02-05-2022138CFDI_S000000598.pdf',
                'xml' => '02-05-2022138CFDI_S000000598.xml',
                'factura_id' => 138,
                'created_at' => '2022-05-02 10:15:28',
                'updated_at' => '2022-05-02 10:15:29',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            138 =>
            array(

                'pdf' => '02-05-2022139CFDI_S000000613.pdf',
                'xml' => '02-05-2022139CFDI_S000000613.xml',
                'factura_id' => 139,
                'created_at' => '2022-05-02 10:17:43',
                'updated_at' => '2022-05-02 10:17:44',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            139 =>
            array(

                'pdf' => '02-05-2022140CFDI_S000000630.pdf',
                'xml' => '02-05-2022140CFDI_S000000630.xml',
                'factura_id' => 140,
                'created_at' => '2022-05-02 10:21:47',
                'updated_at' => '2022-05-02 10:21:48',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            140 =>
            array(

                'pdf' => '02-05-2022141CFDI_S000000647.pdf',
                'xml' => '02-05-2022141CFDI_S000000647.xml',
                'factura_id' => 141,
                'created_at' => '2022-05-02 10:31:32',
                'updated_at' => '2022-05-02 10:31:33',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            141 =>
            array(

                'pdf' => '02-05-2022142CFDI_S000000667.pdf',
                'xml' => '02-05-2022142CFDI_S000000667.xml',
                'factura_id' => 142,
                'created_at' => '2022-05-02 10:34:08',
                'updated_at' => '2022-05-02 10:34:09',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            142 =>
            array(

                'pdf' => '02-05-2022143CFDI_S000000706.pdf',
                'xml' => '02-05-2022143CFDI_S000000706.xml',
                'factura_id' => 143,
                'created_at' => '2022-05-02 10:37:50',
                'updated_at' => '2022-05-02 10:37:51',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            143 =>
            array(

                'pdf' => '02-05-2022144CFDI_S000000715.pdf',
                'xml' => '02-05-2022144CFDI_S000000715.xml',
                'factura_id' => 144,
                'created_at' => '2022-05-02 10:39:09',
                'updated_at' => '2022-05-02 10:39:10',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            144 =>
            array(

                'pdf' => '02-05-2022145CFDI_S000000724.pdf',
                'xml' => '02-05-2022145CFDI_S000000724.xml',
                'factura_id' => 145,
                'created_at' => '2022-05-02 10:45:18',
                'updated_at' => '2022-05-02 10:45:19',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            145 =>
            array(

                'pdf' => '02-05-2022146CFDI_S000000746.pdf',
                'xml' => '02-05-2022146CFDI_S000000746.xml',
                'factura_id' => 146,
                'created_at' => '2022-05-02 10:47:48',
                'updated_at' => '2022-05-02 10:47:49',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            146 =>
            array(

                'pdf' => '02-05-2022147CFDI_S000000771.pdf',
                'xml' => '02-05-2022147CFDI_S000000771.xml',
                'factura_id' => 147,
                'created_at' => '2022-05-02 10:50:42',
                'updated_at' => '2022-05-02 10:50:43',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            147 =>
            array(

                'pdf' => '19-05-2022148CFDI_S000000710.pdf',
                'xml' => '19-05-2022148CFDI_S000000710.xml',
                'factura_id' => 148,
                'created_at' => '2022-05-19 17:38:34',
                'updated_at' => '2022-05-19 17:38:35',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            148 =>
            array(

                'pdf' => '20-05-2022149CFDI_S000000711.pdf',
                'xml' => '20-05-2022149CFDI_S000000711.xml',
                'factura_id' => 149,
                'created_at' => '2022-05-19 18:12:37',
                'updated_at' => '2022-05-19 18:12:38',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            149 =>
            array(

                'pdf' => '20-05-20221508B40A39F-35AB-4639-BEE5-B2679F24AA87.pdf',
                'xml' => '20-05-202215002-04-20225301-04-20224810-03-20222d37ffbb8-e279-405d-adb1-3dea961e2506 (2) (1).xml',
                'factura_id' => 150,
                'created_at' => '2022-05-20 09:41:23',
                'updated_at' => '2022-05-20 09:41:24',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => 1,
            ),
            150 =>
            array(

                'pdf' => '20-05-2022151CFDI_CPB0000275.pdf',
                'xml' => '20-05-2022151CFDI_CPB0000275.xml',
                'factura_id' => 151,
                'created_at' => '2022-05-20 11:46:05',
                'updated_at' => '2022-05-20 11:46:06',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            151 =>
            array(

                'pdf' => '20-05-2022152CFDI_S000000628.pdf',
                'xml' => '20-05-2022152CFDI_S000000628.xml',
                'factura_id' => 152,
                'created_at' => '2022-05-20 14:29:42',
                'updated_at' => '2022-05-20 14:29:43',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            152 =>
            array(

                'pdf' => '20-05-2022153CFDI_S000000646.pdf',
                'xml' => '20-05-2022153CFDI_S000000646.xml',
                'factura_id' => 153,
                'created_at' => '2022-05-20 14:31:09',
                'updated_at' => '2022-05-20 14:31:10',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            153 =>
            array(

                'pdf' => '20-05-2022154CFDI_S000000668.pdf',
                'xml' => '20-05-2022154CFDI_S000000668.xml',
                'factura_id' => 154,
                'created_at' => '2022-05-20 14:38:21',
                'updated_at' => '2022-05-20 14:38:22',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            154 =>
            array(

                'pdf' => '20-05-2022155CFDI_S000000688.pdf',
                'xml' => '20-05-2022155CFDI_S000000688.xml',
                'factura_id' => 155,
                'created_at' => '2022-05-20 14:41:32',
                'updated_at' => '2022-05-20 14:41:33',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            155 =>
            array(

                'pdf' => '20-05-2022156CFDI_S000000690.pdf',
                'xml' => '20-05-2022156CFDI_S000000690.xml',
                'factura_id' => 156,
                'created_at' => '2022-05-20 14:43:20',
                'updated_at' => '2022-05-20 14:43:21',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            156 =>
            array(

                'pdf' => '20-05-2022157CFDI_S000000729.pdf',
                'xml' => '20-05-2022157CFDI_S000000729.xml',
                'factura_id' => 157,
                'created_at' => '2022-05-20 14:48:04',
                'updated_at' => '2022-05-20 14:48:04',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            157 =>
            array(

                'pdf' => '20-05-2022158CFDI_S000000745.pdf',
                'xml' => '20-05-2022158CFDI_S000000745.xml',
                'factura_id' => 158,
                'created_at' => '2022-05-20 14:51:58',
                'updated_at' => '2022-05-20 14:51:59',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            158 =>
            array(

                'pdf' => '20-05-2022159CFDI_S000000767.pdf',
                'xml' => '20-05-2022159CFDI_S000000767.xml',
                'factura_id' => 159,
                'created_at' => '2022-05-20 14:53:36',
                'updated_at' => '2022-05-20 14:53:37',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            159 =>
            array(

                'pdf' => '20-05-2022160CFDI_C000000059.pdf',
                'xml' => '20-05-2022160CFDI_C000000059.xml',
                'factura_id' => 160,
                'created_at' => '2022-05-20 17:39:12',
                'updated_at' => '2022-05-20 17:39:13',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            160 =>
            array(

                'pdf' => '25-05-2022161CFDI_CPB0000276.pdf',
                'xml' => '25-05-2022161CFDI_CPB0000276.xml',
                'factura_id' => 161,
                'created_at' => '2022-05-25 10:50:22',
                'updated_at' => '2022-05-25 10:50:23',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            161 =>
            array(

                'pdf' => '27-05-2022162CFDI_S000000761.pdf',
                'xml' => '27-05-2022162CFDI_S000000761.xml',
                'factura_id' => 162,
                'created_at' => '2022-05-27 11:37:26',
                'updated_at' => '2022-05-27 11:37:26',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            162 =>
            array(

                'pdf' => '31-05-2022163CFDI_S000000374.pdf',
                'xml' => '31-05-2022163CFDI_S000000374.xml',
                'factura_id' => 163,
                'created_at' => '2022-05-31 11:39:33',
                'updated_at' => '2022-05-31 11:39:34',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            163 =>
            array(

                'pdf' => '31-05-2022164CFDI_S000000375.pdf',
                'xml' => '31-05-2022164CFDI_S000000375.xml',
                'factura_id' => 164,
                'created_at' => '2022-05-31 11:49:13',
                'updated_at' => '2022-05-31 11:49:14',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            164 =>
            array(

                'pdf' => '31-05-2022165CFDI_S000000382.pdf',
                'xml' => '31-05-2022165CFDI_S000000382.xml',
                'factura_id' => 165,
                'created_at' => '2022-05-31 12:24:12',
                'updated_at' => '2022-05-31 12:24:13',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            165 =>
            array(

                'pdf' => '31-05-2022166CFDI_S000000387.pdf',
                'xml' => '31-05-2022166CFDI_S000000387.xml',
                'factura_id' => 166,
                'created_at' => '2022-05-31 12:25:26',
                'updated_at' => '2022-05-31 12:25:27',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            166 =>
            array(

                'pdf' => '31-05-2022167CFDI_S000000393.pdf',
                'xml' => '31-05-2022167CFDI_S000000393.xml',
                'factura_id' => 167,
                'created_at' => '2022-05-31 12:26:32',
                'updated_at' => '2022-05-31 12:26:33',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            167 =>
            array(

                'pdf' => '31-05-2022168CFDI_S000000406.pdf',
                'xml' => '31-05-2022168CFDI_S000000406.xml',
                'factura_id' => 168,
                'created_at' => '2022-05-31 12:27:49',
                'updated_at' => '2022-05-31 12:27:50',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            168 =>
            array(

                'pdf' => '31-05-2022169CFDI_S000000412.pdf',
                'xml' => '31-05-2022169CFDI_S000000412.xml',
                'factura_id' => 169,
                'created_at' => '2022-05-31 12:29:19',
                'updated_at' => '2022-05-31 12:29:20',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            169 =>
            array(

                'pdf' => '31-05-2022170CFDI_S000000417.pdf',
                'xml' => '31-05-2022170CFDI_S000000417.xml',
                'factura_id' => 170,
                'created_at' => '2022-05-31 12:30:54',
                'updated_at' => '2022-05-31 12:30:54',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            170 =>
            array(

                'pdf' => '31-05-2022171CFDI_S000000440.pdf',
                'xml' => '31-05-2022171CFDI_S000000440.xml',
                'factura_id' => 171,
                'created_at' => '2022-05-31 12:32:39',
                'updated_at' => '2022-05-31 12:32:40',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            171 =>
            array(

                'pdf' => '31-05-2022172CFDI_S000000447.pdf',
                'xml' => '31-05-2022172CFDI_S000000447.xml',
                'factura_id' => 172,
                'created_at' => '2022-05-31 12:38:32',
                'updated_at' => '2022-05-31 12:38:33',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            172 =>
            array(

                'pdf' => '31-05-2022173CFDI_S000000464.pdf',
                'xml' => '31-05-2022173CFDI_S000000464.xml',
                'factura_id' => 173,
                'created_at' => '2022-05-31 12:39:38',
                'updated_at' => '2022-05-31 12:39:39',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            173 =>
            array(

                'pdf' => '31-05-2022174CFDI_S000000474.pdf',
                'xml' => '31-05-2022174CFDI_S000000474.xml',
                'factura_id' => 174,
                'created_at' => '2022-05-31 12:40:56',
                'updated_at' => '2022-05-31 12:40:57',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            174 =>
            array(

                'pdf' => '31-05-2022175CFDI_S000000497.pdf',
                'xml' => '31-05-2022175CFDI_S000000497.xml',
                'factura_id' => 175,
                'created_at' => '2022-05-31 12:43:07',
                'updated_at' => '2022-05-31 12:43:08',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            175 =>
            array(

                'pdf' => '31-05-2022176CFDI_S000000501.pdf',
                'xml' => '31-05-2022176CFDI_S000000501.xml',
                'factura_id' => 176,
                'created_at' => '2022-05-31 13:05:45',
                'updated_at' => '2022-05-31 13:05:46',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            176 =>
            array(

                'pdf' => '31-05-2022177CFDI_S000000508.pdf',
                'xml' => '31-05-2022177CFDI_S000000508.xml',
                'factura_id' => 177,
                'created_at' => '2022-05-31 13:07:04',
                'updated_at' => '2022-05-31 13:07:05',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            177 =>
            array(

                'pdf' => '31-05-2022178CFDI_S000000521.pdf',
                'xml' => '31-05-2022178CFDI_S000000521.xml',
                'factura_id' => 178,
                'created_at' => '2022-05-31 13:08:31',
                'updated_at' => '2022-05-31 13:08:32',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            178 =>
            array(

                'pdf' => '31-05-2022179CFDI_S000000539.pdf',
                'xml' => '31-05-2022179CFDI_S000000539.xml',
                'factura_id' => 179,
                'created_at' => '2022-05-31 13:13:45',
                'updated_at' => '2022-05-31 13:13:46',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            179 =>
            array(

                'pdf' => '31-05-2022180CFDI_S000000549.pdf',
                'xml' => '31-05-2022180CFDI_S000000549.xml',
                'factura_id' => 180,
                'created_at' => '2022-05-31 13:15:03',
                'updated_at' => '2022-05-31 13:15:04',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            180 =>
            array(

                'pdf' => '31-05-2022181CFDI_S000000564.pdf',
                'xml' => '31-05-2022181CFDI_S000000564.xml',
                'factura_id' => 181,
                'created_at' => '2022-05-31 13:16:13',
                'updated_at' => '2022-05-31 13:16:14',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            181 =>
            array(

                'pdf' => '31-05-2022182CFDI_S000000588.pdf',
                'xml' => '31-05-2022182CFDI_S000000588.xml',
                'factura_id' => 182,
                'created_at' => '2022-05-31 13:24:06',
                'updated_at' => '2022-05-31 13:24:07',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            182 =>
            array(

                'pdf' => '31-05-2022183CFDI_S000000604.pdf',
                'xml' => '31-05-2022183CFDI_S000000604.xml',
                'factura_id' => 183,
                'created_at' => '2022-05-31 13:26:29',
                'updated_at' => '2022-05-31 13:26:30',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            183 =>
            array(

                'pdf' => '31-05-2022184CFDI_S000000618.pdf',
                'xml' => '31-05-2022184CFDI_S000000618.xml',
                'factura_id' => 184,
                'created_at' => '2022-05-31 13:27:53',
                'updated_at' => '2022-05-31 13:27:54',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            184 =>
            array(

                'pdf' => '31-05-2022185CFDI_S000000640.pdf',
                'xml' => '31-05-2022185CFDI_S000000640.xml',
                'factura_id' => 185,
                'created_at' => '2022-05-31 13:30:36',
                'updated_at' => '2022-05-31 13:30:37',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            185 =>
            array(

                'pdf' => '31-05-2022186CFDI_S000000657.pdf',
                'xml' => '31-05-2022186CFDI_S000000657.xml',
                'factura_id' => 186,
                'created_at' => '2022-05-31 13:32:06',
                'updated_at' => '2022-05-31 13:32:07',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            186 =>
            array(

                'pdf' => '31-05-2022187CFDI_S000000687.pdf',
                'xml' => '31-05-2022187CFDI_S000000687.xml',
                'factura_id' => 187,
                'created_at' => '2022-05-31 13:33:24',
                'updated_at' => '2022-05-31 13:33:25',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            187 =>
            array(

                'pdf' => '31-05-2022188CFDI CPB329 ASF.pdf',
                'xml' => '31-05-2022188CFDI CPB329 ASF.xml',
                'factura_id' => 188,
                'created_at' => '2022-05-31 13:34:41',
                'updated_at' => '2022-05-31 13:34:42',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            188 =>
            array(

                'pdf' => '31-05-2022189CFDI F S712 ASF .pdf',
                'xml' => '31-05-2022189CFDI F S712 ASF .xml',
                'factura_id' => 189,
                'created_at' => '2022-05-31 13:40:00',
                'updated_at' => '2022-05-31 13:40:01',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            189 =>
            array(

                'pdf' => '31-05-2022190CFDI_S000000721.pdf',
                'xml' => '31-05-2022190CFDI_S000000721.xml',
                'factura_id' => 190,
                'created_at' => '2022-05-31 13:43:03',
                'updated_at' => '2022-05-31 13:43:04',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            190 =>
            array(

                'pdf' => '31-05-2022191CFDI_S000000737.pdf',
                'xml' => '31-05-2022191CFDI_S000000737.xml',
                'factura_id' => 191,
                'created_at' => '2022-05-31 13:44:19',
                'updated_at' => '2022-05-31 13:44:20',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            191 =>
            array(

                'pdf' => '31-05-2022192CFDI_S000000759.pdf',
                'xml' => '31-05-2022192CFDI_S000000759.xml',
                'factura_id' => 192,
                'created_at' => '2022-05-31 13:45:27',
                'updated_at' => '2022-05-31 13:45:28',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            192 =>
            array(

                'pdf' => '31-05-2022193CFDI_S000000655.pdf',
                'xml' => '31-05-2022193CFDI_S000000655.xml',
                'factura_id' => 193,
                'created_at' => '2022-05-31 14:30:20',
                'updated_at' => '2022-05-31 14:30:21',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            193 =>
            array(

                'pdf' => '31-05-2022194CFDI_S000000622.pdf',
                'xml' => '31-05-2022194CFDI_S000000622.xml',
                'factura_id' => 194,
                'created_at' => '2022-05-31 14:32:09',
                'updated_at' => '2022-05-31 14:32:10',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            194 =>
            array(

                'pdf' => '31-05-2022195CFDI_S000000643.pdf',
                'xml' => '31-05-2022195CFDI_S000000643.xml',
                'factura_id' => 195,
                'created_at' => '2022-05-31 14:34:59',
                'updated_at' => '2022-05-31 14:35:00',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            195 =>
            array(

                'pdf' => '31-05-2022196CFDI_S000000662.pdf',
                'xml' => '31-05-2022196CFDI_S000000662.xml',
                'factura_id' => 196,
                'created_at' => '2022-05-31 14:41:06',
                'updated_at' => '2022-05-31 14:41:08',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            196 =>
            array(

                'pdf' => '31-05-2022197CFDI_S000000674.pdf',
                'xml' => '31-05-2022197CFDI_S000000674.xml',
                'factura_id' => 197,
                'created_at' => '2022-05-31 15:09:36',
                'updated_at' => '2022-05-31 15:09:37',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            197 =>
            array(

                'pdf' => '31-05-2022198CFDI_S000000675.pdf',
                'xml' => '31-05-2022198CFDI_S000000675.xml',
                'factura_id' => 198,
                'created_at' => '2022-05-31 15:16:18',
                'updated_at' => '2022-05-31 15:16:19',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            198 =>
            array(

                'pdf' => '31-05-2022199CFDI_S000000728.pdf',
                'xml' => '31-05-2022199CFDI_S000000728.xml',
                'factura_id' => 199,
                'created_at' => '2022-05-31 15:17:38',
                'updated_at' => '2022-05-31 15:17:39',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            199 =>
            array(

                'pdf' => '31-05-2022200CFDI_S000000750.pdf',
                'xml' => '31-05-2022200CFDI_S000000750.xml',
                'factura_id' => 200,
                'created_at' => '2022-05-31 15:21:33',
                'updated_at' => '2022-05-31 15:21:34',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            200 =>
            array(

                'pdf' => '31-05-2022201CFDI_S000000768.pdf',
                'xml' => '31-05-2022201CFDI_S000000768.xml',
                'factura_id' => 201,
                'created_at' => '2022-05-31 15:22:48',
                'updated_at' => '2022-05-31 15:22:48',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            201 =>
            array(

                'pdf' => '31-05-2022202CFDI_S000000800.pdf',
                'xml' => '31-05-2022202CFDI_S000000800.xml',
                'factura_id' => 202,
                'created_at' => '2022-05-31 15:24:13',
                'updated_at' => '2022-05-31 15:24:14',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            202 =>
            array(

                'pdf' => '31-05-2022203CFDI_S000000801.pdf',
                'xml' => '31-05-2022203CFDI_S000000801.xml',
                'factura_id' => 203,
                'created_at' => '2022-05-31 15:44:20',
                'updated_at' => '2022-05-31 15:44:21',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            203 =>
            array(

                'pdf' => '31-05-2022204CFDI_S000000731.pdf',
                'xml' => '31-05-2022204CFDI_S000000731.xml',
                'factura_id' => 204,
                'created_at' => '2022-05-31 17:09:17',
                'updated_at' => '2022-05-31 17:09:18',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            204 =>
            array(

                'pdf' => '31-05-2022205CFDI_S000000755.pdf',
                'xml' => '31-05-2022205CFDI_S000000755.xml',
                'factura_id' => 205,
                'created_at' => '2022-05-31 17:14:10',
                'updated_at' => '2022-05-31 17:14:11',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            205 =>
            array(

                'pdf' => '31-05-2022206CFDI_S000000773.pdf',
                'xml' => '31-05-2022206CFDI_S000000773.xml',
                'factura_id' => 206,
                'created_at' => '2022-05-31 17:15:46',
                'updated_at' => '2022-05-31 17:15:47',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            206 =>
            array(

                'pdf' => '31-05-2022207CFDI_S000000803.pdf',
                'xml' => '31-05-2022207CFDI_S000000803.xml',
                'factura_id' => 207,
                'created_at' => '2022-05-31 17:17:17',
                'updated_at' => '2022-05-31 17:17:18',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            207 =>
            array(

                'pdf' => '31-05-2022208CFDI_S000000722.pdf',
                'xml' => '31-05-2022208CFDI_S000000722.xml',
                'factura_id' => 208,
                'created_at' => '2022-05-31 17:58:03',
                'updated_at' => '2022-05-31 17:58:04',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            208 =>
            array(

                'pdf' => '31-05-2022209CFDI_S000000751.pdf',
                'xml' => '31-05-2022209CFDI_S000000751.xml',
                'factura_id' => 209,
                'created_at' => '2022-05-31 17:59:53',
                'updated_at' => '2022-05-31 17:59:54',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            209 =>
            array(

                'pdf' => '01-06-2022210CFDI_S000000760.pdf',
                'xml' => '01-06-2022210CFDI_S000000760.xml',
                'factura_id' => 210,
                'created_at' => '2022-05-31 18:01:13',
                'updated_at' => '2022-05-31 18:01:13',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            210 =>
            array(

                'pdf' => '03-06-2022211CFDI_S000000792.pdf',
                'xml' => '03-06-2022211CFDI_S000000792.xml',
                'factura_id' => 211,
                'created_at' => '2022-06-03 10:35:48',
                'updated_at' => '2022-06-03 10:35:49',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            211 =>
            array(

                'pdf' => '06-06-2022212S  12 ABRIL CFDI.pdf',
                'xml' => '06-06-2022212S  12 ABRIL XML.xml',
                'factura_id' => 212,
                'created_at' => '2022-06-06 12:43:50',
                'updated_at' => '2022-06-06 12:43:51',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            212 =>
            array(

                'pdf' => '06-06-2022213S  14 MAYO CFDI.pdf',
                'xml' => '06-06-2022213S  14 MAYO XML.xml',
                'factura_id' => 213,
                'created_at' => '2022-06-06 12:51:25',
                'updated_at' => '2022-06-06 12:51:26',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            213 =>
            array(

                'pdf' => '06-06-2022214S  15 NC MAYO CFDI.pdf',
                'xml' => '06-06-2022214S  15 NC MAYO XML.xml',
                'factura_id' => 214,
                'created_at' => '2022-06-06 12:58:55',
                'updated_at' => '2022-06-06 12:58:56',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            214 =>
            array(

                'pdf' => '06-06-2022215S  17  JUNIO CFDI.pdf',
                'xml' => '06-06-2022215S  17  JUNIO XML.xml',
                'factura_id' => 215,
                'created_at' => '2022-06-06 13:07:39',
                'updated_at' => '2022-06-06 13:07:40',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            215 =>
            array(

                'pdf' => '06-06-2022216S 13 NC ABRIL CFDI.pdf',
                'xml' => '06-06-2022216S 13 NC ABRIL XML.xml',
                'factura_id' => 216,
                'created_at' => '2022-06-06 13:17:20',
                'updated_at' => '2022-06-06 13:17:21',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            216 =>
            array(

                'pdf' => '06-06-2022217SIL160727HV7-S25-7B355116-EB2A-4217-92F0-1C0821C9EB30.pdf',
                'xml' => '06-06-2022217SIL160727HV7-S25-7B355116-EB2A-4217-92F0-1C0821C9EB30.xml',
                'factura_id' => 217,
                'created_at' => '2022-06-06 13:25:20',
                'updated_at' => '2022-06-06 13:25:21',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            217 =>
            array(

                'pdf' => '06-06-2022218SILENT4BUSINESS -S77.pdf',
                'xml' => '06-06-2022218SILENT4BUSINESS -S77.xml',
                'factura_id' => 218,
                'created_at' => '2022-06-06 13:29:08',
                'updated_at' => '2022-06-06 13:29:09',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            218 =>
            array(

                'pdf' => '06-06-2022219SIL160727HV7-S176-40F98528-4396-4221-97F7-D25A97828017.pdf',
                'xml' => '06-06-2022219SIL160727HV7-S176-40F98528-4396-4221-97F7-D25A97828017.XML',
                'factura_id' => 219,
                'created_at' => '2022-06-06 16:29:50',
                'updated_at' => '2022-06-06 16:29:51',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            219 =>
            array(

                'pdf' => '06-06-2022220SILENT4BUSINESS -S32.pdf',
                'xml' => '06-06-2022220SILENT4BUSINESS -S32.xml',
                'factura_id' => 220,
                'created_at' => '2022-06-06 16:33:35',
                'updated_at' => '2022-06-06 16:33:36',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            220 =>
            array(

                'pdf' => '07-06-2022221CFDI_S000000562.pdf',
                'xml' => '07-06-2022221CFDI_S000000562.xml',
                'factura_id' => 221,
                'created_at' => '2022-06-07 09:03:40',
                'updated_at' => '2022-06-07 09:03:41',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            221 =>
            array(

                'pdf' => '07-06-2022222CFDI_S000000785.pdf',
                'xml' => '07-06-2022222CFDI_S000000785.xml',
                'factura_id' => 222,
                'created_at' => '2022-06-07 10:12:22',
                'updated_at' => '2022-06-07 10:12:24',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            222 =>
            array(

                'pdf' => '07-06-2022223CFDI_S000000813.pdf',
                'xml' => '07-06-2022223CFDI_S000000813.xml',
                'factura_id' => 223,
                'created_at' => '2022-06-07 10:13:27',
                'updated_at' => '2022-06-07 10:13:28',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            223 =>
            array(

                'pdf' => '07-06-2022224CFDI_S000000806.pdf',
                'xml' => '07-06-2022224CFDI_S000000806.xml',
                'factura_id' => 224,
                'created_at' => '2022-06-07 10:16:27',
                'updated_at' => '2022-06-07 10:16:28',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            224 =>
            array(

                'pdf' => '07-06-2022225CFDI_S000000774.pdf',
                'xml' => '07-06-2022225CFDI_S000000774.xml',
                'factura_id' => 225,
                'created_at' => '2022-06-07 10:20:00',
                'updated_at' => '2022-06-07 10:20:01',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            225 =>
            array(

                'pdf' => '07-06-2022226CFDI_S000000812.pdf',
                'xml' => '07-06-2022226CFDI_S000000812.xml',
                'factura_id' => 226,
                'created_at' => '2022-06-07 10:20:58',
                'updated_at' => '2022-06-07 10:20:59',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            226 =>
            array(

                'pdf' => '07-06-2022227CFDI_S000000795.pdf',
                'xml' => '07-06-2022227CFDI_S000000795.xml',
                'factura_id' => 227,
                'created_at' => '2022-06-07 10:24:24',
                'updated_at' => '2022-06-07 10:24:25',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            227 =>
            array(

                'pdf' => '07-06-2022228CFDI_S000000819.pdf',
                'xml' => '07-06-2022228CFDI_S000000819.xml',
                'factura_id' => 228,
                'created_at' => '2022-06-07 10:25:30',
                'updated_at' => '2022-06-07 10:25:31',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            228 =>
            array(

                'pdf' => '10-06-2022229CFDI_S000000543.pdf',
                'xml' => '10-06-2022229CFDI_S000000543.xml',
                'factura_id' => 229,
                'created_at' => '2022-06-10 10:23:32',
                'updated_at' => '2022-06-10 10:23:33',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            229 =>
            array(

                'pdf' => '16-06-2022230CFDI_S000000524.pdf',
                'xml' => '16-06-2022230CFDI_S000000524.xml',
                'factura_id' => 230,
                'created_at' => '2022-06-16 08:37:20',
                'updated_at' => '2022-06-16 08:37:21',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            230 =>
            array(

                'pdf' => '16-06-2022231CFDI_S000000524.pdf',
                'xml' => '16-06-2022231CFDI_S000000524.xml',
                'factura_id' => 231,
                'created_at' => '2022-06-16 08:40:02',
                'updated_at' => '2022-06-16 08:40:03',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            231 =>
            array(

                'pdf' => '16-06-2022232CFDI_S000000525.pdf',
                'xml' => '16-06-2022232CFDI_S000000525.xml',
                'factura_id' => 232,
                'created_at' => '2022-06-16 08:41:09',
                'updated_at' => '2022-06-16 08:41:10',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            232 =>
            array(

                'pdf' => '16-06-2022233CFDI_S000000540.pdf',
                'xml' => '16-06-2022233CFDI_S000000540.xml',
                'factura_id' => 233,
                'created_at' => '2022-06-16 08:42:23',
                'updated_at' => '2022-06-16 08:42:24',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            233 =>
            array(

                'pdf' => '16-06-2022234CFDI_S000000550.pdf',
                'xml' => '16-06-2022234CFDI_S000000550.xml',
                'factura_id' => 234,
                'created_at' => '2022-06-16 08:44:10',
                'updated_at' => '2022-06-16 08:44:11',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            234 =>
            array(

                'pdf' => '16-06-2022235CFDI_S000000565.pdf',
                'xml' => '16-06-2022235CFDI_S000000565.xml',
                'factura_id' => 235,
                'created_at' => '2022-06-16 08:46:22',
                'updated_at' => '2022-06-16 08:46:23',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            235 =>
            array(

                'pdf' => '16-06-2022236CFDI_S000000589.pdf',
                'xml' => '16-06-2022236CFDI_S000000589.xml',
                'factura_id' => 236,
                'created_at' => '2022-06-16 08:47:34',
                'updated_at' => '2022-06-16 08:47:35',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            236 =>
            array(

                'pdf' => '16-06-2022237CFDI_S000000608.pdf',
                'xml' => '16-06-2022237CFDI_S000000608.xml',
                'factura_id' => 237,
                'created_at' => '2022-06-16 08:49:04',
                'updated_at' => '2022-06-16 08:49:05',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            237 =>
            array(

                'pdf' => '16-06-2022238CFDI_S000000621.pdf',
                'xml' => '16-06-2022238CFDI_S000000621.xml',
                'factura_id' => 238,
                'created_at' => '2022-06-16 08:50:34',
                'updated_at' => '2022-06-16 08:50:35',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            238 =>
            array(

                'pdf' => '16-06-2022239CFDI_S000000641.pdf',
                'xml' => '16-06-2022239CFDI_S000000641.xml',
                'factura_id' => 239,
                'created_at' => '2022-06-16 08:51:57',
                'updated_at' => '2022-06-16 08:51:58',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            239 =>
            array(

                'pdf' => '16-06-2022240CFDI_S000000659.pdf',
                'xml' => '16-06-2022240CFDI_S000000659.xml',
                'factura_id' => 240,
                'created_at' => '2022-06-16 08:53:17',
                'updated_at' => '2022-06-16 08:53:18',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            240 =>
            array(

                'pdf' => '16-06-2022241CFDI_CPB0000278.pdf',
                'xml' => '16-06-2022241CFDI_CPB0000278.xml',
                'factura_id' => 241,
                'created_at' => '2022-06-16 08:54:37',
                'updated_at' => '2022-06-16 08:54:38',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            241 =>
            array(

                'pdf' => '16-06-2022242CFDI_S000000699.pdf',
                'xml' => '16-06-2022242CFDI_S000000699.xml',
                'factura_id' => 242,
                'created_at' => '2022-06-16 08:56:00',
                'updated_at' => '2022-06-16 08:56:01',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            242 =>
            array(

                'pdf' => '16-06-2022243CFDI_S000000526.pdf',
                'xml' => '16-06-2022243CFDI_S000000526.xml',
                'factura_id' => 243,
                'created_at' => '2022-06-16 09:04:02',
                'updated_at' => '2022-06-16 09:04:03',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            243 =>
            array(

                'pdf' => '16-06-2022244CFDI_S000000582.pdf',
                'xml' => '16-06-2022244CFDI_S000000582.xml',
                'factura_id' => 244,
                'created_at' => '2022-06-16 09:06:15',
                'updated_at' => '2022-06-16 09:06:17',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            244 =>
            array(

                'pdf' => '16-06-2022245CFDI_S000000583.pdf',
                'xml' => '16-06-2022245CFDI_S000000583.xml',
                'factura_id' => 245,
                'created_at' => '2022-06-16 09:11:56',
                'updated_at' => '2022-06-16 09:11:57',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            245 =>
            array(

                'pdf' => '16-06-2022246CFDI_S000000584.pdf',
                'xml' => '16-06-2022246CFDI_S000000584.xml',
                'factura_id' => 246,
                'created_at' => '2022-06-16 09:15:12',
                'updated_at' => '2022-06-16 09:15:13',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            246 =>
            array(

                'pdf' => '16-06-2022247CFDI_S000000664.pdf',
                'xml' => '16-06-2022247CFDI_S000000664.xml',
                'factura_id' => 247,
                'created_at' => '2022-06-16 09:17:49',
                'updated_at' => '2022-06-16 09:17:50',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            247 =>
            array(

                'pdf' => '16-06-2022248CFDI_S000000697.pdf',
                'xml' => null,
                'factura_id' => 248,
                'created_at' => '2022-06-16 10:31:33',
                'updated_at' => '2022-06-16 10:31:33',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            248 =>
            array(

                'pdf' => '16-06-2022249CFDI_S000000543.pdf',
                'xml' => '16-06-2022249CFDI_S000000543.xml',
                'factura_id' => 249,
                'created_at' => '2022-06-16 10:48:53',
                'updated_at' => '2022-06-16 10:48:54',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            249 =>
            array(

                'pdf' => '16-06-2022250CFDI_C000000076.pdf',
                'xml' => '16-06-2022250CFDI_C000000076.xml',
                'factura_id' => 250,
                'created_at' => '2022-06-16 10:53:22',
                'updated_at' => '2022-06-16 10:53:23',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            250 =>
            array(

                'pdf' => '16-06-2022251CFDI_S000000796.pdf',
                'xml' => '16-06-2022251CFDI_S000000796.xml',
                'factura_id' => 251,
                'created_at' => '2022-06-16 10:59:14',
                'updated_at' => '2022-06-16 10:59:15',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            251 =>
            array(

                'pdf' => '16-06-2022252Peñoles 02 de 12_soc y noc.pdf',
                'xml' => '16-06-2022252CFDI_S000000797.xml',
                'factura_id' => 252,
                'created_at' => '2022-06-16 11:00:59',
                'updated_at' => '2022-06-16 11:01:00',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            252 =>
            array(

                'pdf' => '16-06-2022253CFDI_S000000798.pdf',
                'xml' => '16-06-2022253CFDI_S000000798.xml',
                'factura_id' => 253,
                'created_at' => '2022-06-16 11:03:37',
                'updated_at' => '2022-06-16 11:03:38',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            253 =>
            array(

                'pdf' => '16-06-2022254CFDI_S000000488.pdf',
                'xml' => '16-06-2022254CFDI_S000000488.xml',
                'factura_id' => 254,
                'created_at' => '2022-06-16 11:10:28',
                'updated_at' => '2022-06-16 11:10:29',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            254 =>
            array(

                'pdf' => '16-06-2022255CFDI_C000000075.pdf',
                'xml' => '16-06-2022255CFDI_C000000075.xml',
                'factura_id' => 255,
                'created_at' => '2022-06-16 11:15:19',
                'updated_at' => '2022-06-16 11:15:20',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            255 =>
            array(

                'pdf' => '29-06-2022256CFDI_S000000348.pdf',
                'xml' => '29-06-2022256CFDI_S000000348.xml',
                'factura_id' => 256,
                'created_at' => '2022-06-29 12:26:17',
                'updated_at' => '2022-06-29 12:26:18',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            256 =>
            array(

                'pdf' => '29-06-2022257CFDI_S000000407.pdf',
                'xml' => '29-06-2022257CFDI_S000000407.xml',
                'factura_id' => 257,
                'created_at' => '2022-06-29 13:11:51',
                'updated_at' => '2022-06-29 13:11:52',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            257 =>
            array(

                'pdf' => '29-06-2022258CFDI_S000000396.pdf',
                'xml' => '29-06-2022258CFDI_S000000396.xml',
                'factura_id' => 258,
                'created_at' => '2022-06-29 13:38:29',
                'updated_at' => '2022-06-29 13:38:30',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            258 =>
            array(

                'pdf' => '29-06-2022259CFDI_S000000467.pdf',
                'xml' => '29-06-2022259CFDI_S000000467.xml',
                'factura_id' => 259,
                'created_at' => '2022-06-29 15:31:25',
                'updated_at' => '2022-06-29 15:31:26',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            259 =>
            array(

                'pdf' => '29-06-2022260CFDI_S000000704.pdf',
                'xml' => '29-06-2022260CFDI_S000000704.xml',
                'factura_id' => 260,
                'created_at' => '2022-06-29 16:36:29',
                'updated_at' => '2022-06-29 16:36:30',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            260 =>
            array(

                'pdf' => '30-06-2022261CFDI_S000000511.pdf',
                'xml' => '30-06-2022261CFDI_S000000511.xml',
                'factura_id' => 261,
                'created_at' => '2022-06-30 10:00:19',
                'updated_at' => '2022-06-30 10:00:20',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            261 =>
            array(

                'pdf' => '30-06-2022262CFDI_S000000496.pdf',
                'xml' => '30-06-2022262CFDI_S000000496.xml',
                'factura_id' => 262,
                'created_at' => '2022-06-30 12:48:06',
                'updated_at' => '2022-06-30 12:48:06',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            262 =>
            array(

                'pdf' => '30-06-2022263CFDI_S000000554.pdf',
                'xml' => '30-06-2022263CFDI_S000000554.xml',
                'factura_id' => 263,
                'created_at' => '2022-06-30 15:11:25',
                'updated_at' => '2022-06-30 15:11:26',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            263 =>
            array(

                'pdf' => '30-06-2022264CFDI_S000000484.pdf',
                'xml' => '30-06-2022264CFDI_S000000484.xml',
                'factura_id' => 264,
                'created_at' => '2022-06-30 17:11:35',
                'updated_at' => '2022-06-30 17:11:36',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            264 =>
            array(

                'pdf' => '01-07-2022265CFDI_S000000471.pdf',
                'xml' => '01-07-2022265CFDI_S000000471.xml',
                'factura_id' => 265,
                'created_at' => '2022-07-01 10:20:09',
                'updated_at' => '2022-07-01 10:20:10',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            265 =>
            array(

                'pdf' => '01-07-2022266CFDI_C000000054.pdf',
                'xml' => '01-07-2022266CFDI_C000000054.xml',
                'factura_id' => 266,
                'created_at' => '2022-07-01 12:25:16',
                'updated_at' => '2022-07-01 12:25:17',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            266 =>
            array(

                'pdf' => '01-07-2022267CFDI_C000000055.pdf',
                'xml' => '01-07-2022267CFDI_C000000055.xml',
                'factura_id' => 267,
                'created_at' => '2022-07-01 12:30:12',
                'updated_at' => '2022-07-01 12:30:13',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            267 =>
            array(

                'pdf' => '01-07-2022268CFDI_C000000067.pdf',
                'xml' => '01-07-2022268CFDI_C000000067.xml',
                'factura_id' => 268,
                'created_at' => '2022-07-01 12:35:19',
                'updated_at' => '2022-07-01 12:35:20',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            268 =>
            array(

                'pdf' => '01-07-2022269CFDI_C000000074.pdf',
                'xml' => '01-07-2022269CFDI_C000000074.xml',
                'factura_id' => 269,
                'created_at' => '2022-07-01 12:37:56',
                'updated_at' => '2022-07-01 12:37:57',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            269 =>
            array(

                'pdf' => '01-07-2022270CFDI_C000000092.pdf',
                'xml' => '01-07-2022270CFDI_C000000092.xml',
                'factura_id' => 270,
                'created_at' => '2022-07-01 12:41:46',
                'updated_at' => '2022-07-01 12:41:47',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            270 =>
            array(

                'pdf' => '01-07-2022271CFDI_S000000516.pdf',
                'xml' => '01-07-2022271CFDI_S000000516.xml',
                'factura_id' => 271,
                'created_at' => '2022-07-01 12:48:17',
                'updated_at' => '2022-07-01 12:48:18',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            271 =>
            array(

                'pdf' => '01-07-2022272CFDI_S000000580.pdf',
                'xml' => '01-07-2022272CFDI_S000000580.xml',
                'factura_id' => 272,
                'created_at' => '2022-07-01 12:53:23',
                'updated_at' => '2022-07-01 12:53:24',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            272 =>
            array(

                'pdf' => '01-08-2022273CFDI_S000000741.pdf',
                'xml' => '01-08-2022273CFDI_S000000741.xml',
                'factura_id' => 273,
                'created_at' => '2022-08-01 11:18:57',
                'updated_at' => '2022-08-01 11:18:58',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            273 =>
            array(

                'pdf' => '01-08-2022274CFDI_S000000752.pdf',
                'xml' => '01-08-2022274CFDI_S000000752.xml',
                'factura_id' => 274,
                'created_at' => '2022-08-01 11:27:10',
                'updated_at' => '2022-08-01 11:27:11',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            274 =>
            array(

                'pdf' => '01-08-2022275CFDI_S000000769.pdf',
                'xml' => '01-08-2022275CFDI_S000000769.xml',
                'factura_id' => 275,
                'created_at' => '2022-08-01 11:33:29',
                'updated_at' => '2022-08-01 11:33:30',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            275 =>
            array(

                'pdf' => '01-08-2022276CFDI_S000000809.pdf',
                'xml' => '01-08-2022276CFDI_S000000809.xml',
                'factura_id' => 276,
                'created_at' => '2022-08-01 11:37:11',
                'updated_at' => '2022-08-01 11:37:12',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            276 =>
            array(

                'pdf' => '01-08-2022277CFDI_S000000615.pdf',
                'xml' => '01-08-2022277CFDI_S000000615.xml',
                'factura_id' => 277,
                'created_at' => '2022-08-01 12:40:45',
                'updated_at' => '2022-08-01 12:40:46',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            277 =>
            array(

                'pdf' => '01-08-2022278CFDI_S000000571.pdf',
                'xml' => '01-08-2022278CFDI_S000000571.xml',
                'factura_id' => 278,
                'created_at' => '2022-08-01 15:24:51',
                'updated_at' => '2022-08-01 15:24:52',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            278 =>
            array(

                'pdf' => '01-08-2022279CFDI_S000000601.pdf',
                'xml' => '01-08-2022279CFDI_S000000601.xml',
                'factura_id' => 279,
                'created_at' => '2022-08-01 15:26:49',
                'updated_at' => '2022-08-01 15:26:50',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            279 =>
            array(

                'pdf' => '01-08-2022280CFDI_S000000611.pdf',
                'xml' => '01-08-2022280CFDI_S000000611.xml',
                'factura_id' => 280,
                'created_at' => '2022-08-01 15:28:46',
                'updated_at' => '2022-08-01 15:28:47',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            280 =>
            array(

                'pdf' => '01-08-2022281CFDI_S000000620.pdf',
                'xml' => '01-08-2022281CFDI_S000000620.xml',
                'factura_id' => 281,
                'created_at' => '2022-08-01 15:31:25',
                'updated_at' => '2022-08-01 15:31:26',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            281 =>
            array(

                'pdf' => '01-08-2022282CFDI_S000000658.pdf',
                'xml' => '01-08-2022282CFDI_S000000658.xml',
                'factura_id' => 282,
                'created_at' => '2022-08-01 15:32:59',
                'updated_at' => '2022-08-01 15:33:00',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            282 =>
            array(

                'pdf' => '01-08-2022283CFDI_S000000684.pdf',
                'xml' => '01-08-2022283CFDI_S000000684.xml',
                'factura_id' => 283,
                'created_at' => '2022-08-01 15:34:52',
                'updated_at' => '2022-08-01 15:34:53',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            283 =>
            array(

                'pdf' => '01-08-2022284CFDI_S000000713.pdf',
                'xml' => '01-08-2022284CFDI_S000000713.xml',
                'factura_id' => 284,
                'created_at' => '2022-08-01 15:37:44',
                'updated_at' => '2022-08-01 15:37:45',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            284 =>
            array(

                'pdf' => '01-08-2022285CFDI_S000000734.pdf',
                'xml' => '01-08-2022285CFDI_S000000734.xml',
                'factura_id' => 285,
                'created_at' => '2022-08-01 15:43:49',
                'updated_at' => '2022-08-01 15:43:50',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            285 =>
            array(

                'pdf' => '01-08-2022286CFDI_S000000753.pdf',
                'xml' => '01-08-2022286CFDI_S000000753.xml',
                'factura_id' => 286,
                'created_at' => '2022-08-01 15:46:37',
                'updated_at' => '2022-08-01 15:46:38',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            286 =>
            array(

                'pdf' => '01-08-2022287CFDI_S000000777.pdf',
                'xml' => '01-08-2022287CFDI_S000000777.xml',
                'factura_id' => 287,
                'created_at' => '2022-08-01 15:49:09',
                'updated_at' => '2022-08-01 15:49:10',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            287 =>
            array(

                'pdf' => '01-08-2022288CFDI_S000000802.pdf',
                'xml' => '01-08-2022288CFDI_S000000802.xml',
                'factura_id' => 288,
                'created_at' => '2022-08-01 15:52:10',
                'updated_at' => '2022-08-01 15:52:12',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            288 =>
            array(

                'pdf' => '01-08-2022289CFDI_S000000825.pdf',
                'xml' => '01-08-2022289CFDI_S000000825.xml',
                'factura_id' => 289,
                'created_at' => '2022-08-01 15:55:23',
                'updated_at' => '2022-08-01 15:55:24',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            289 =>
            array(

                'pdf' => '01-08-2022290CFDI_S000000856.pdf',
                'xml' => '01-08-2022290CFDI_S000000856.xml',
                'factura_id' => 290,
                'created_at' => '2022-08-01 15:57:37',
                'updated_at' => '2022-08-01 15:57:38',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            290 =>
            array(

                'pdf' => '01-08-2022291CFDI_S000000572.pdf',
                'xml' => '01-08-2022291CFDI_S000000572.xml',
                'factura_id' => 291,
                'created_at' => '2022-08-01 16:12:08',
                'updated_at' => '2022-08-01 16:12:09',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            291 =>
            array(

                'pdf' => '01-08-2022292CFDI_C000000048.pdf',
                'xml' => '01-08-2022292CFDI_C000000048.xml',
                'factura_id' => 292,
                'created_at' => '2022-08-01 17:01:26',
                'updated_at' => '2022-08-01 17:01:27',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            292 =>
            array(

                'pdf' => '01-08-2022293CFDI_C000000057.pdf',
                'xml' => '01-08-2022293CFDI_C000000057.xml',
                'factura_id' => 293,
                'created_at' => '2022-08-01 17:06:58',
                'updated_at' => '2022-08-01 17:06:59',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            293 =>
            array(

                'pdf' => '02-08-2022294CFDI_C000000066.pdf',
                'xml' => '02-08-2022294CFDI_C000000066.xml',
                'factura_id' => 294,
                'created_at' => '2022-08-02 08:07:05',
                'updated_at' => '2022-08-02 08:07:06',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            294 =>
            array(

                'pdf' => '02-08-2022295CFDI_C000000072.pdf',
                'xml' => '02-08-2022295CFDI_C000000072.xml',
                'factura_id' => 295,
                'created_at' => '2022-08-02 08:36:51',
                'updated_at' => '2022-08-02 08:36:52',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            295 =>
            array(

                'pdf' => '02-08-2022296CFDI_C000000079.pdf',
                'xml' => '02-08-2022296CFDI_C000000079.xml',
                'factura_id' => 296,
                'created_at' => '2022-08-02 08:46:19',
                'updated_at' => '2022-08-02 08:46:20',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            296 =>
            array(

                'pdf' => '02-08-2022297CFDI_C000000087.pdf',
                'xml' => '02-08-2022297CFDI_C000000087.xml',
                'factura_id' => 297,
                'created_at' => '2022-08-02 08:51:23',
                'updated_at' => '2022-08-02 08:51:25',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            297 =>
            array(

                'pdf' => '02-08-2022298CFDI_C000000051.pdf',
                'xml' => '02-08-2022298CFDI_C000000051.xml',
                'factura_id' => 298,
                'created_at' => '2022-08-02 09:23:05',
                'updated_at' => '2022-08-02 09:23:06',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            298 =>
            array(

                'pdf' => '02-08-2022299CFDI_C000000056.pdf',
                'xml' => '02-08-2022299CFDI_C000000056.xml',
                'factura_id' => 299,
                'created_at' => '2022-08-02 09:31:22',
                'updated_at' => '2022-08-02 09:31:23',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            299 =>
            array(

                'pdf' => '02-08-2022300CFDI_S000000692.pdf',
                'xml' => '02-08-2022300CFDI_S000000692.xml',
                'factura_id' => 300,
                'created_at' => '2022-08-02 10:09:38',
                'updated_at' => '2022-08-02 10:09:39',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            300 =>
            array(

                'pdf' => '02-08-2022301CFDI_S000000692.pdf',
                'xml' => '02-08-2022301CFDI_S000000692.xml',
                'factura_id' => 301,
                'created_at' => '2022-08-02 10:24:07',
                'updated_at' => '2022-08-02 10:24:07',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            301 =>
            array(

                'pdf' => '02-08-2022302CFDI_C000000073.pdf',
                'xml' => '02-08-2022302CFDI_C000000073.xml',
                'factura_id' => 302,
                'created_at' => '2022-08-02 10:27:44',
                'updated_at' => '2022-08-02 10:27:45',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            302 =>
            array(

                'pdf' => '02-08-2022303CFDI_S000000624.pdf',
                'xml' => '02-08-2022303CFDI_S000000624.xml',
                'factura_id' => 303,
                'created_at' => '2022-08-02 12:10:03',
                'updated_at' => '2022-08-02 12:10:04',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            303 =>
            array(

                'pdf' => '09-09-2022304CFDI_C000000987.pdf',
                'xml' => '09-09-2022304CFDI_C000000987.xml',
                'factura_id' => 304,
                'created_at' => '2022-09-09 14:42:19',
                'updated_at' => '2022-09-09 14:42:20',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            304 =>
            array(

                'pdf' => '09-09-2022305factura Junio.pdf',
                'xml' => null,
                'factura_id' => 305,
                'created_at' => '2022-09-09 14:48:47',
                'updated_at' => '2022-09-09 14:48:47',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            305 =>
            array(

                'pdf' => '09-09-2022306factura_julio.pdf',
                'xml' => '09-09-2022306CFDI_C000001073.xml',
                'factura_id' => 306,
                'created_at' => '2022-09-09 15:16:29',
                'updated_at' => '2022-09-09 15:16:30',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            306 =>
            array(

                'pdf' => '09-09-2022307CFDI_S000000290.pdf',
                'xml' => '09-09-2022307CFDI_S000000290.xml',
                'factura_id' => 307,
                'created_at' => '2022-09-09 15:42:31',
                'updated_at' => '2022-09-09 15:42:32',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            307 =>
            array(

                'pdf' => '09-09-2022308CFDI_S000000305.pdf',
                'xml' => '09-09-2022308CFDI_S000000305.xml',
                'factura_id' => 308,
                'created_at' => '2022-09-09 15:56:32',
                'updated_at' => '2022-09-09 15:56:33',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            308 =>
            array(

                'pdf' => '09-09-2022309CFDI_S000000839.pdf',
                'xml' => '09-09-2022309CFDI_S000000839.xml',
                'factura_id' => 309,
                'created_at' => '2022-09-09 16:32:24',
                'updated_at' => '2022-09-09 16:32:24',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            309 =>
            array(

                'pdf' => '09-09-2022310CFDI_S000000862.pdf',
                'xml' => '09-09-2022310CFDI_S000000862.xml',
                'factura_id' => 310,
                'created_at' => '2022-09-09 16:35:26',
                'updated_at' => '2022-09-09 16:35:26',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            310 =>
            array(

                'pdf' => '09-09-2022311ASF001230TS2SS0000000897.pdf',
                'xml' => null,
                'factura_id' => 311,
                'created_at' => '2022-09-09 16:37:09',
                'updated_at' => '2022-09-09 16:37:09',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            311 =>
            array(

                'pdf' => '09-09-2022312CFDI_S000000319.pdf',
                'xml' => '09-09-2022312CFDI_S000000319.xml',
                'factura_id' => 312,
                'created_at' => '2022-09-09 16:39:36',
                'updated_at' => '2022-09-09 16:39:36',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            312 =>
            array(

                'pdf' => '09-09-2022313CFDI_S000000594.pdf',
                'xml' => '09-09-2022313CFDI_S000000594.xml',
                'factura_id' => 313,
                'created_at' => '2022-09-09 16:40:54',
                'updated_at' => '2022-09-09 16:40:54',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            313 =>
            array(

                'pdf' => '09-09-2022314CFDI_S000000594.pdf',
                'xml' => '09-09-2022314CFDI_S000000594.xml',
                'factura_id' => 314,
                'created_at' => '2022-09-09 16:42:38',
                'updated_at' => '2022-09-09 16:42:38',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            314 =>
            array(

                'pdf' => '09-09-2022315CFDI_S000000596.pdf',
                'xml' => '09-09-2022315CFDI_S000000596.xml',
                'factura_id' => 315,
                'created_at' => '2022-09-09 16:44:01',
                'updated_at' => '2022-09-09 16:44:01',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            315 =>
            array(

                'pdf' => '09-09-2022316CFDI_S000000597.pdf',
                'xml' => '09-09-2022316CFDI_S000000597.xml',
                'factura_id' => 316,
                'created_at' => '2022-09-09 16:45:11',
                'updated_at' => '2022-09-09 16:45:11',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            316 =>
            array(

                'pdf' => '09-09-2022317CFDI_S000000634.pdf',
                'xml' => '09-09-2022317CFDI_S000000634.xml',
                'factura_id' => 317,
                'created_at' => '2022-09-09 16:47:06',
                'updated_at' => '2022-09-09 16:47:06',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            317 =>
            array(

                'pdf' => '09-09-2022318CFDI_S000000661.pdf',
                'xml' => '09-09-2022318CFDI_S000000661.xml',
                'factura_id' => 318,
                'created_at' => '2022-09-09 16:48:44',
                'updated_at' => '2022-09-09 16:48:44',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            318 =>
            array(

                'pdf' => '09-09-2022319CFDI_S000000694.pdf',
                'xml' => '09-09-2022319CFDI_S000000694.xml',
                'factura_id' => 319,
                'created_at' => '2022-09-09 16:50:23',
                'updated_at' => '2022-09-09 16:50:23',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            319 =>
            array(

                'pdf' => '09-09-2022320CFDI_S000000635.pdf',
                'xml' => '09-09-2022320CFDI_S000000635.xml',
                'factura_id' => 320,
                'created_at' => '2022-09-09 16:51:48',
                'updated_at' => '2022-09-09 16:51:48',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            320 =>
            array(

                'pdf' => '09-09-2022321CFDI_S000000336.pdf',
                'xml' => '09-09-2022321CFDI_S000000336.xml',
                'factura_id' => 321,
                'created_at' => '2022-09-09 16:51:56',
                'updated_at' => '2022-09-09 16:51:56',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            321 =>
            array(

                'pdf' => '09-09-2022322CFDI_S000000695.pdf',
                'xml' => '09-09-2022322CFDI_S000000695.xml',
                'factura_id' => 322,
                'created_at' => '2022-09-09 16:53:12',
                'updated_at' => '2022-09-09 16:53:13',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            322 =>
            array(

                'pdf' => '09-09-2022323CFDI_S000000708.pdf',
                'xml' => '09-09-2022323CFDI_S000000708.xml',
                'factura_id' => 323,
                'created_at' => '2022-09-09 16:54:15',
                'updated_at' => '2022-09-09 16:54:15',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            323 =>
            array(

                'pdf' => '09-09-2022324CFDI_S000000709.pdf',
                'xml' => '09-09-2022324CFDI_S000000709.xml',
                'factura_id' => 324,
                'created_at' => '2022-09-09 16:55:12',
                'updated_at' => '2022-09-09 16:55:12',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            324 =>
            array(

                'pdf' => '09-09-2022325CFDI_S000000826.pdf',
                'xml' => '09-09-2022325CFDI_S000000826.xml',
                'factura_id' => 325,
                'created_at' => '2022-09-09 16:57:33',
                'updated_at' => '2022-09-09 16:57:33',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            325 =>
            array(

                'pdf' => '09-09-2022326CFDI_S000000338.pdf',
                'xml' => '09-09-2022326CFDI_S000000338.xml',
                'factura_id' => 326,
                'created_at' => '2022-09-09 16:57:38',
                'updated_at' => '2022-09-09 16:57:38',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            326 =>
            array(

                'pdf' => '09-09-2022327CFDI_S000000848.pdf',
                'xml' => '09-09-2022327CFDI_S000000848.xml',
                'factura_id' => 327,
                'created_at' => '2022-09-09 16:58:24',
                'updated_at' => '2022-09-09 16:58:25',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            327 =>
            array(

                'pdf' => '09-09-2022328CFDI_S000000864.pdf',
                'xml' => '09-09-2022328CFDI_S000000864.xml',
                'factura_id' => 328,
                'created_at' => '2022-09-09 16:59:14',
                'updated_at' => '2022-09-09 16:59:14',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            328 =>
            array(

                'pdf' => '09-09-2022329SEP1312171X9SS0000000902.pdf',
                'xml' => '09-09-2022329SEP1312171X9SS0000000902.xml',
                'factura_id' => 329,
                'created_at' => '2022-09-09 17:00:04',
                'updated_at' => '2022-09-09 17:00:04',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            329 =>
            array(

                'pdf' => '09-09-2022330CFDI_S000000846.pdf',
                'xml' => '09-09-2022330CFDI_S000000846.xml',
                'factura_id' => 330,
                'created_at' => '2022-09-09 17:04:33',
                'updated_at' => '2022-09-09 17:04:33',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            330 =>
            array(

                'pdf' => '09-09-2022331CFDI_S000000868.pdf',
                'xml' => '09-09-2022331CFDI_S000000868.xml',
                'factura_id' => 331,
                'created_at' => '2022-09-09 17:05:58',
                'updated_at' => '2022-09-09 17:05:58',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            331 =>
            array(

                'pdf' => '09-09-2022332121_SENADO_FACTURA S 477.pdf',
                'xml' => null,
                'factura_id' => 332,
                'created_at' => '2022-09-09 17:32:25',
                'updated_at' => '2022-09-09 17:32:25',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            332 =>
            array(

                'pdf' => '09-09-2022333121_SENADO_FACTURA S 489.pdf',
                'xml' => null,
                'factura_id' => 333,
                'created_at' => '2022-09-09 17:39:27',
                'updated_at' => '2022-09-09 17:39:27',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            333 =>
            array(

                'pdf' => '09-09-2022334121_SENADO_Factura S 527.pdf',
                'xml' => null,
                'factura_id' => 334,
                'created_at' => '2022-09-09 17:46:16',
                'updated_at' => '2022-09-09 17:46:16',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            334 =>
            array(

                'pdf' => '09-09-2022335CFDI_CPB0000010.pdf',
                'xml' => '09-09-2022335CFDI_CPB0000010.xml',
                'factura_id' => 335,
                'created_at' => '2022-09-09 17:53:59',
                'updated_at' => '2022-09-09 17:54:00',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            335 =>
            array(

                'pdf' => '10-09-2022336CFDI_S000000308.pdf',
                'xml' => '10-09-2022336CFDI_S000000308.xml',
                'factura_id' => 336,
                'created_at' => '2022-09-09 18:00:44',
                'updated_at' => '2022-09-09 18:00:44',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            336 =>
            array(

                'pdf' => '10-09-2022337CFDI_S000000324.pdf',
                'xml' => '10-09-2022337CFDI_S000000324.xml',
                'factura_id' => 337,
                'created_at' => '2022-09-09 18:09:18',
                'updated_at' => '2022-09-09 18:09:18',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            337 =>
            array(

                'pdf' => '10-09-202233892_PÑLS_CFDI_S000000370.pdf',
                'xml' => null,
                'factura_id' => 338,
                'created_at' => '2022-09-09 18:15:43',
                'updated_at' => '2022-09-09 18:15:43',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            338 =>
            array(

                'pdf' => '10-09-2022339CFDI_S000000448.pdf',
                'xml' => '10-09-2022339CFDI_S000000448.xml',
                'factura_id' => 339,
                'created_at' => '2022-09-09 18:21:40',
                'updated_at' => '2022-09-09 18:21:40',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            339 =>
            array(

                'pdf' => '10-09-2022340CFDI_S000000449.pdf',
                'xml' => '10-09-2022340CFDI_S000000449.xml',
                'factura_id' => 340,
                'created_at' => '2022-09-09 18:23:38',
                'updated_at' => '2022-09-09 18:23:39',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            340 =>
            array(

                'pdf' => '10-09-2022341CFDI_S000000468.pdf',
                'xml' => '10-09-2022341CFDI_S000000468.xml',
                'factura_id' => 341,
                'created_at' => '2022-09-09 18:27:25',
                'updated_at' => '2022-09-09 18:27:25',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            341 =>
            array(

                'pdf' => '10-09-2022342CFDI_S000000498.pdf',
                'xml' => '10-09-2022342CFDI_S000000498.xml',
                'factura_id' => 342,
                'created_at' => '2022-09-09 18:38:54',
                'updated_at' => '2022-09-09 18:38:54',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            342 =>
            array(

                'pdf' => '10-09-2022343CFDI_S000000343.pdf',
                'xml' => '10-09-2022343CFDI_S000000343.xml',
                'factura_id' => 343,
                'created_at' => '2022-09-09 18:42:21',
                'updated_at' => '2022-09-09 18:42:22',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            343 =>
            array(

                'pdf' => '10-09-2022344CFDI_S000000344.pdf',
                'xml' => '10-09-2022344CFDI_S000000344.xml',
                'factura_id' => 344,
                'created_at' => '2022-09-09 18:54:34',
                'updated_at' => '2022-09-09 18:54:34',
                'deleted_at' => null,
                'created_by' => 10,
                'updated_by' => 10,
            ),
            344 =>
            array(

                'pdf' => '12-09-2022345CFDI_S000000827.pdf',
                'xml' => '12-09-2022345CFDI_S000000827.xml',
                'factura_id' => 345,
                'created_at' => '2022-09-12 07:50:11',
                'updated_at' => '2022-09-12 07:50:11',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            345 =>
            array(

                'pdf' => '12-09-2022346CFDI_S000000867.pdf',
                'xml' => '12-09-2022346CFDI_S000000867.xml',
                'factura_id' => 346,
                'created_at' => '2022-09-12 07:51:14',
                'updated_at' => '2022-09-12 07:51:14',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            346 =>
            array(

                'pdf' => '12-09-2022347BMV760203JD4SS0000000887.pdf',
                'xml' => '12-09-2022347BMV760203JD4SS0000000887.xml',
                'factura_id' => 347,
                'created_at' => '2022-09-12 07:52:04',
                'updated_at' => '2022-09-12 07:52:04',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            347 =>
            array(

                'pdf' => '12-09-2022348CFDI_S000000822.pdf',
                'xml' => '12-09-2022348CFDI_S000000822.xml',
                'factura_id' => 348,
                'created_at' => '2022-09-12 07:58:21',
                'updated_at' => '2022-09-12 07:58:21',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            348 =>
            array(

                'pdf' => '12-09-2022349CFDI_S000000849.pdf',
                'xml' => '12-09-2022349CFDI_S000000849.xml',
                'factura_id' => 349,
                'created_at' => '2022-09-12 07:59:16',
                'updated_at' => '2022-09-12 07:59:16',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            349 =>
            array(

                'pdf' => '12-09-2022350CFDI_S000000878.pdf',
                'xml' => '12-09-2022350CFDI_S000000878.xml',
                'factura_id' => 350,
                'created_at' => '2022-09-12 08:00:12',
                'updated_at' => '2022-09-12 08:00:12',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            350 =>
            array(

                'pdf' => '12-09-2022351CFDI_S000000830.pdf',
                'xml' => '12-09-2022351CFDI_S000000830.xml',
                'factura_id' => 351,
                'created_at' => '2022-09-12 08:06:24',
                'updated_at' => '2022-09-12 08:06:25',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            351 =>
            array(

                'pdf' => '12-09-2022352CFDI_S000000855.pdf',
                'xml' => '12-09-2022352CFDI_S000000855.xml',
                'factura_id' => 352,
                'created_at' => '2022-09-12 08:07:44',
                'updated_at' => '2022-09-12 08:07:44',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            352 =>
            array(

                'pdf' => '12-09-2022353BID100428IX6SS0000000889.pdf',
                'xml' => '12-09-2022353BID100428IX6SS0000000889.xml',
                'factura_id' => 353,
                'created_at' => '2022-09-12 08:10:58',
                'updated_at' => '2022-09-12 08:10:58',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            353 =>
            array(

                'pdf' => '12-09-2022354CFDI_S000000558.pdf',
                'xml' => '12-09-2022354CFDI_S000000558.xml',
                'factura_id' => 354,
                'created_at' => '2022-09-12 08:26:59',
                'updated_at' => '2022-09-12 08:26:59',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            354 =>
            array(

                'pdf' => '12-09-2022355CFDI_S000000652.pdf',
                'xml' => '12-09-2022355CFDI_S000000652.xml',
                'factura_id' => 355,
                'created_at' => '2022-09-12 08:28:11',
                'updated_at' => '2022-09-12 08:28:12',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            355 =>
            array(

                'pdf' => '12-09-2022356CFDI_S000000684.pdf',
                'xml' => '12-09-2022356CFDI_S000000684.xml',
                'factura_id' => 356,
                'created_at' => '2022-09-12 08:30:21',
                'updated_at' => '2022-09-12 08:30:21',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            356 =>
            array(

                'pdf' => '12-09-2022357CFDI_S000000883.pdf',
                'xml' => '12-09-2022357CFDI_S000000883.xml',
                'factura_id' => 357,
                'created_at' => '2022-09-12 08:31:26',
                'updated_at' => '2022-09-12 08:31:26',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            357 =>
            array(

                'pdf' => '12-09-2022358DCO8009185Y9FC0000000001.pdf',
                'xml' => '12-09-2022358DCO8009185Y9FC0000000001.xml',
                'factura_id' => 358,
                'created_at' => '2022-09-12 08:34:53',
                'updated_at' => '2022-09-12 08:34:54',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            358 =>
            array(

                'pdf' => '12-09-2022359CFDI_S000000649.pdf',
                'xml' => '12-09-2022359CFDI_S000000649.xml',
                'factura_id' => 359,
                'created_at' => '2022-09-12 08:40:19',
                'updated_at' => '2022-09-12 08:40:19',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            359 =>
            array(

                'pdf' => '12-09-2022360CFDI_S000000650.pdf',
                'xml' => '12-09-2022360CFDI_S000000650.xml',
                'factura_id' => 360,
                'created_at' => '2022-09-12 08:41:32',
                'updated_at' => '2022-09-12 08:41:32',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            360 =>
            array(

                'pdf' => '12-09-2022361CFDI_S000000651.pdf',
                'xml' => '12-09-2022361CFDI_S000000651.xml',
                'factura_id' => 361,
                'created_at' => '2022-09-12 08:42:45',
                'updated_at' => '2022-09-12 08:42:45',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            361 =>
            array(

                'pdf' => '12-09-2022362CFDI_S000000663.pdf',
                'xml' => '12-09-2022362CFDI_S000000663.xml',
                'factura_id' => 362,
                'created_at' => '2022-09-12 08:43:40',
                'updated_at' => '2022-09-12 08:43:40',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            362 =>
            array(

                'pdf' => '12-09-2022363CFDI_S000000700.pdf',
                'xml' => '12-09-2022363CFDI_S000000700.xml',
                'factura_id' => 363,
                'created_at' => '2022-09-12 08:44:33',
                'updated_at' => '2022-09-12 08:44:34',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            363 =>
            array(

                'pdf' => '12-09-2022364CFDI F S716 CINTEGRA .pdf',
                'xml' => '12-09-2022364CFDI F S716 CINTEGRA .xml',
                'factura_id' => 364,
                'created_at' => '2022-09-12 08:45:40',
                'updated_at' => '2022-09-12 08:45:40',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            364 =>
            array(

                'pdf' => '12-09-2022365CFDI_S000000828.pdf',
                'xml' => '12-09-2022365CFDI_S000000828.xml',
                'factura_id' => 365,
                'created_at' => '2022-09-12 08:46:59',
                'updated_at' => '2022-09-12 08:46:59',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            365 =>
            array(

                'pdf' => '12-09-2022366CFDI_S000000491.pdf',
                'xml' => '12-09-2022366CFDI_S000000491.xml',
                'factura_id' => 366,
                'created_at' => '2022-09-12 08:50:33',
                'updated_at' => '2022-09-12 08:50:33',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            366 =>
            array(

                'pdf' => '29-09-2022367GCM960301469FC0000000005.pdf',
                'xml' => '29-09-2022367GCM960301469FC0000000005.xml',
                'factura_id' => 367,
                'created_at' => '2022-09-29 10:13:20',
                'updated_at' => '2022-09-29 10:13:20',
                'deleted_at' => null,
                'created_by' => 13,
                'updated_by' => 13,
            ),
            367 =>
            array(

                'pdf' => '23-01-2023368CFDI_S000000863.pdf',
                'xml' => '23-01-2023368CFDI_S000000863.xml',
                'factura_id' => 368,
                'created_at' => '2023-01-23 12:01:26',
                'updated_at' => '2023-01-23 12:01:26',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            368 =>
            array(

                'pdf' => '23-01-2023369CFDI_S000000884.pdf',
                'xml' => '23-01-2023369CFDI_S000000884.xml',
                'factura_id' => 369,
                'created_at' => '2023-01-23 12:06:18',
                'updated_at' => '2023-01-23 12:06:18',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            369 =>
            array(

                'pdf' => '23-01-2023370IQU8402147S9SS0000000885.pdf',
                'xml' => '23-01-2023370IQU8402147S9SS0000000885.xml',
                'factura_id' => 370,
                'created_at' => '2023-01-23 12:08:39',
                'updated_at' => '2023-01-23 12:08:39',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            370 =>
            array(

                'pdf' => '23-01-2023371IQU8402147S9SS0000000954.pdf',
                'xml' => '23-01-2023371IQU8402147S9SS0000000954.xml',
                'factura_id' => 371,
                'created_at' => '2023-01-23 12:10:44',
                'updated_at' => '2023-01-23 12:10:44',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            371 =>
            array(

                'pdf' => '23-01-2023372IQU8402147S9SS0000000970.pdf',
                'xml' => '23-01-2023372IQU8402147S9SS0000000970.xml',
                'factura_id' => 372,
                'created_at' => '2023-01-23 12:12:53',
                'updated_at' => '2023-01-23 12:12:54',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            372 =>
            array(

                'pdf' => '23-01-2023373IQU8402147S9SS0000001011.pdf',
                'xml' => '23-01-2023373IQU8402147S9SS0000001011.xml',
                'factura_id' => 373,
                'created_at' => '2023-01-23 12:15:20',
                'updated_at' => '2023-01-23 12:15:21',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            373 =>
            array(

                'pdf' => '23-01-2023374IQU8402147S9SS0000001055.pdf',
                'xml' => '23-01-2023374IQU8402147S9SS0000001055.xml',
                'factura_id' => 374,
                'created_at' => '2023-01-23 12:25:17',
                'updated_at' => '2023-01-23 12:25:17',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            374 =>
            array(

                'pdf' => '24-01-2023375CFDI_S000000345.pdf',
                'xml' => null,
                'factura_id' => 375,
                'created_at' => '2023-01-24 12:35:20',
                'updated_at' => '2023-01-24 12:35:20',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            375 =>
            array(

                'pdf' => '24-01-2023376CFDI_S000000345.pdf',
                'xml' => '24-01-2023376CFDI_S000000345.xml',
                'factura_id' => 376,
                'created_at' => '2023-01-24 12:39:19',
                'updated_at' => '2023-01-24 12:39:19',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            376 =>
            array(

                'pdf' => '24-01-2023377CFDI_S000000384.pdf',
                'xml' => '24-01-2023377CFDI_S000000384.xml',
                'factura_id' => 377,
                'created_at' => '2023-01-24 12:40:58',
                'updated_at' => '2023-01-24 12:40:58',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            377 =>
            array(

                'pdf' => '24-01-2023378CFDI_S000000385.pdf',
                'xml' => '24-01-2023378CFDI_S000000385.xml',
                'factura_id' => 378,
                'created_at' => '2023-01-24 12:43:32',
                'updated_at' => '2023-01-24 12:43:33',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            378 =>
            array(

                'pdf' => '24-01-2023379CFDI_S000000390.pdf',
                'xml' => '24-01-2023379CFDI_S000000390.xml',
                'factura_id' => 379,
                'created_at' => '2023-01-24 12:44:32',
                'updated_at' => '2023-01-24 12:44:33',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            379 =>
            array(

                'pdf' => '24-01-2023380CFDI_S000000395.pdf',
                'xml' => '24-01-2023380CFDI_S000000395.xml',
                'factura_id' => 380,
                'created_at' => '2023-01-24 12:45:49',
                'updated_at' => '2023-01-24 12:45:49',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            380 =>
            array(

                'pdf' => '24-01-2023381CFDI_S000000410.pdf',
                'xml' => '24-01-2023381CFDI_S000000410.xml',
                'factura_id' => 381,
                'created_at' => '2023-01-24 12:47:19',
                'updated_at' => '2023-01-24 12:47:19',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            381 =>
            array(

                'pdf' => '24-01-2023382CFDI_S000000415.pdf',
                'xml' => '24-01-2023382CFDI_S000000415.xml',
                'factura_id' => 382,
                'created_at' => '2023-01-24 12:48:29',
                'updated_at' => '2023-01-24 12:48:29',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            382 =>
            array(

                'pdf' => '24-01-2023383CFDI_S000000421.pdf',
                'xml' => '24-01-2023383CFDI_S000000421.xml',
                'factura_id' => 383,
                'created_at' => '2023-01-24 12:51:57',
                'updated_at' => '2023-01-24 12:51:57',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            383 =>
            array(

                'pdf' => '24-01-2023384CFDI_S000000451.pdf',
                'xml' => '24-01-2023384CFDI_S000000451.xml',
                'factura_id' => 384,
                'created_at' => '2023-01-24 12:53:42',
                'updated_at' => '2023-01-24 12:53:43',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            384 =>
            array(

                'pdf' => '24-01-2023385CFDI_S000000645.pdf',
                'xml' => '24-01-2023385CFDI_S000000645.xml',
                'factura_id' => 385,
                'created_at' => '2023-01-24 13:01:22',
                'updated_at' => '2023-01-24 13:01:22',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            385 =>
            array(

                'pdf' => '24-01-2023386CFDI_S000000503.pdf',
                'xml' => '24-01-2023386CFDI_S000000503.xml',
                'factura_id' => 386,
                'created_at' => '2023-01-24 13:03:58',
                'updated_at' => '2023-01-24 13:03:58',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            386 =>
            array(

                'pdf' => '24-01-2023387CFDI_S000000514.pdf',
                'xml' => '24-01-2023387CFDI_S000000514.xml',
                'factura_id' => 387,
                'created_at' => '2023-01-24 13:05:43',
                'updated_at' => '2023-01-24 13:05:43',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            387 =>
            array(

                'pdf' => '24-01-2023388CFDI_S000000542.pdf',
                'xml' => '24-01-2023388CFDI_S000000542.xml',
                'factura_id' => 388,
                'created_at' => '2023-01-24 13:07:11',
                'updated_at' => '2023-01-24 13:07:11',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            388 =>
            array(

                'pdf' => '24-01-2023389CFDI_S000000610.pdf',
                'xml' => '24-01-2023389CFDI_S000000610.xml',
                'factura_id' => 389,
                'created_at' => '2023-01-24 13:08:21',
                'updated_at' => '2023-01-24 13:08:21',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            389 =>
            array(

                'pdf' => '24-01-2023390CFDI_S000000645.pdf',
                'xml' => '24-01-2023390CFDI_S000000645.xml',
                'factura_id' => 390,
                'created_at' => '2023-01-24 13:12:35',
                'updated_at' => '2023-01-24 13:12:36',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            390 =>
            array(

                'pdf' => '24-01-2023391CFDI_S000000665.pdf',
                'xml' => '24-01-2023391CFDI_S000000665.xml',
                'factura_id' => 391,
                'created_at' => '2023-01-24 13:13:53',
                'updated_at' => '2023-01-24 13:13:53',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            391 =>
            array(

                'pdf' => '24-01-2023392CFDI_S000000676.pdf',
                'xml' => '24-01-2023392CFDI_S000000676.xml',
                'factura_id' => 392,
                'created_at' => '2023-01-24 13:15:06',
                'updated_at' => '2023-01-24 13:15:06',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            392 =>
            array(

                'pdf' => '24-01-2023393CFDI_S000000696.pdf',
                'xml' => '24-01-2023393CFDI_S000000696.xml',
                'factura_id' => 393,
                'created_at' => '2023-01-24 13:18:19',
                'updated_at' => '2023-01-24 13:18:19',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            393 =>
            array(

                'pdf' => '24-01-2023394CFDI_S000000701.pdf',
                'xml' => '24-01-2023394CFDI_S000000701.xml',
                'factura_id' => 394,
                'created_at' => '2023-01-24 13:19:10',
                'updated_at' => '2023-01-24 13:19:10',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            394 =>
            array(

                'pdf' => '24-01-2023395CFDI_S000000726.pdf',
                'xml' => '24-01-2023395CFDI_S000000726.xml',
                'factura_id' => 395,
                'created_at' => '2023-01-24 13:20:37',
                'updated_at' => '2023-01-24 13:20:38',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            395 =>
            array(

                'pdf' => '24-01-2023396CFDI_S000000743.pdf',
                'xml' => '24-01-2023396CFDI_S000000743.xml',
                'factura_id' => 396,
                'created_at' => '2023-01-24 13:22:35',
                'updated_at' => '2023-01-24 13:22:36',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            396 =>
            array(

                'pdf' => '24-01-2023397CFDI_S000000766.pdf',
                'xml' => '24-01-2023397CFDI_S000000766.xml',
                'factura_id' => 397,
                'created_at' => '2023-01-24 13:24:27',
                'updated_at' => '2023-01-24 13:24:27',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            397 =>
            array(

                'pdf' => '24-01-2023398CFDI_S000000790.pdf',
                'xml' => '24-01-2023398CFDI_S000000790.xml',
                'factura_id' => 398,
                'created_at' => '2023-01-24 13:27:16',
                'updated_at' => '2023-01-24 13:27:16',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            398 =>
            array(

                'pdf' => '24-01-2023399CFDI_S000000816.pdf',
                'xml' => '24-01-2023399CFDI_S000000816.xml',
                'factura_id' => 399,
                'created_at' => '2023-01-24 13:28:29',
                'updated_at' => '2023-01-24 13:28:29',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            399 =>
            array(

                'pdf' => '24-01-2023400CFDI_S000000871.pdf',
                'xml' => '24-01-2023400CFDI_S000000871.xml',
                'factura_id' => 400,
                'created_at' => '2023-01-24 13:45:00',
                'updated_at' => '2023-01-24 13:45:00',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            400 =>
            array(

                'pdf' => '24-01-2023401DWA041125U40SS0000000913.pdf',
                'xml' => '24-01-2023401DWA041125U40SS0000000913.xml',
                'factura_id' => 401,
                'created_at' => '2023-01-24 13:45:45',
                'updated_at' => '2023-01-24 13:45:45',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            401 =>
            array(

                'pdf' => '24-01-2023402DWA041125U40SS0000000950.pdf',
                'xml' => '24-01-2023402DWA041125U40SS0000000950.xml',
                'factura_id' => 402,
                'created_at' => '2023-01-24 13:47:16',
                'updated_at' => '2023-01-24 13:47:16',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            402 =>
            array(

                'pdf' => '24-01-2023403DWA041125U40SS0000000983.pdf',
                'xml' => '24-01-2023403DWA041125U40SS0000000983.xml',
                'factura_id' => 403,
                'created_at' => '2023-01-24 13:49:07',
                'updated_at' => '2023-01-24 13:49:07',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            403 =>
            array(

                'pdf' => '24-01-2023404DWA041125U40SS0000001012.pdf',
                'xml' => '24-01-2023404DWA041125U40SS0000001012.xml',
                'factura_id' => 404,
                'created_at' => '2023-01-24 13:50:52',
                'updated_at' => '2023-01-24 13:50:53',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            404 =>
            array(

                'pdf' => '26-01-2023405CFDI_S000000441.pdf',
                'xml' => '26-01-2023405CFDI_S000000441.xml',
                'factura_id' => 405,
                'created_at' => '2023-01-26 09:45:00',
                'updated_at' => '2023-01-26 09:45:00',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            405 =>
            array(

                'pdf' => '26-01-2023406IQU8402147S9SS0000000989.pdf',
                'xml' => '26-01-2023406IQU8402147S9SS0000000989.xml',
                'factura_id' => 406,
                'created_at' => '2023-01-26 10:49:22',
                'updated_at' => '2023-01-26 10:49:22',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            406 =>
            array(

                'pdf' => '26-01-2023407CFDI_S000000599.pdf',
                'xml' => '26-01-2023407CFDI_S000000599.xml',
                'factura_id' => 407,
                'created_at' => '2023-01-26 12:28:30',
                'updated_at' => '2023-01-26 12:28:30',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            407 =>
            array(

                'pdf' => '26-01-2023408CFDI_S000000478.pdf',
                'xml' => '26-01-2023408CFDI_S000000478.xml',
                'factura_id' => 408,
                'created_at' => '2023-01-26 14:27:46',
                'updated_at' => '2023-01-26 14:27:46',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            408 =>
            array(

                'pdf' => '26-01-2023409CFDI_S000000528.pdf',
                'xml' => '26-01-2023409CFDI_S000000528.xml',
                'factura_id' => 409,
                'created_at' => '2023-01-26 14:30:26',
                'updated_at' => '2023-01-26 14:30:27',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            409 =>
            array(

                'pdf' => '30-01-20234106DF1D481-F16E-4083-B12F-D62868061944.pdf',
                'xml' => null,
                'factura_id' => 410,
                'created_at' => '2023-01-30 10:06:06',
                'updated_at' => '2023-01-30 10:06:06',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            410 =>
            array(

                'pdf' => '30-01-20234117E4E9BE5-2FC7-45AC-B64B-A8ECB36D3093.pdf',
                'xml' => null,
                'factura_id' => 411,
                'created_at' => '2023-01-30 10:07:43',
                'updated_at' => '2023-01-30 10:07:43',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            411 =>
            array(

                'pdf' => '30-01-20234129D8481B8-4DB4-4470-A94B-14328552CB1F.pdf',
                'xml' => null,
                'factura_id' => 412,
                'created_at' => '2023-01-30 10:09:52',
                'updated_at' => '2023-01-30 10:09:52',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            412 =>
            array(

                'pdf' => '30-01-202341369B1C7AF-10AF-4ED5-9F9D-53FA4124FE12.pdf',
                'xml' => null,
                'factura_id' => 413,
                'created_at' => '2023-01-30 10:16:50',
                'updated_at' => '2023-01-30 10:16:50',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            413 =>
            array(

                'pdf' => '30-01-2023414193A43B3-01A0-4F88-AA27-9895719E8F9B.pdf',
                'xml' => null,
                'factura_id' => 414,
                'created_at' => '2023-01-30 10:19:35',
                'updated_at' => '2023-01-30 10:19:35',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            414 =>
            array(

                'pdf' => '30-01-20234153725590B-9D55-4870-A7AA-47417A663908.pdf',
                'xml' => null,
                'factura_id' => 415,
                'created_at' => '2023-01-30 10:27:24',
                'updated_at' => '2023-01-30 10:27:25',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            415 =>
            array(

                'pdf' => '30-01-2023416CFFD9006-25DE-4A5A-836B-53FD7B18A212.pdf',
                'xml' => null,
                'factura_id' => 416,
                'created_at' => '2023-01-30 10:29:03',
                'updated_at' => '2023-01-30 10:29:04',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            416 =>
            array(

                'pdf' => '30-01-2023417D316481D-816F-4F3C-9BDB-0D1ED5EC7D79.pdf',
                'xml' => null,
                'factura_id' => 417,
                'created_at' => '2023-01-30 10:30:54',
                'updated_at' => '2023-01-30 10:30:55',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            417 =>
            array(

                'pdf' => '30-01-2023418CFDI_S000000552.pdf',
                'xml' => '30-01-2023418CFDI_S000000552.xml',
                'factura_id' => 418,
                'created_at' => '2023-01-30 13:29:19',
                'updated_at' => '2023-01-30 13:29:19',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            418 =>
            array(

                'pdf' => '30-01-2023419CFDI_S000000568.pdf',
                'xml' => '30-01-2023419CFDI_S000000568.xml',
                'factura_id' => 419,
                'created_at' => '2023-01-30 13:34:01',
                'updated_at' => '2023-01-30 13:34:01',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            419 =>
            array(

                'pdf' => '30-01-2023420CFDI_S000000592.pdf',
                'xml' => '30-01-2023420CFDI_S000000592.xml',
                'factura_id' => 420,
                'created_at' => '2023-01-30 13:36:29',
                'updated_at' => '2023-01-30 13:36:29',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            420 =>
            array(

                'pdf' => '30-01-2023421CFDI_S000000627.pdf',
                'xml' => '30-01-2023421CFDI_S000000627.xml',
                'factura_id' => 421,
                'created_at' => '2023-01-30 13:39:13',
                'updated_at' => '2023-01-30 13:39:13',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            421 =>
            array(

                'pdf' => '30-01-2023422CFDI_S000000850.pdf',
                'xml' => '30-01-2023422CFDI_S000000850.xml',
                'factura_id' => 422,
                'created_at' => '2023-01-30 13:41:38',
                'updated_at' => '2023-01-30 13:41:38',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            422 =>
            array(

                'pdf' => '02-02-2023423CFDI_S000000334.pdf',
                'xml' => null,
                'factura_id' => 423,
                'created_at' => '2023-02-02 13:57:51',
                'updated_at' => '2023-02-02 13:57:51',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            423 =>
            array(

                'pdf' => '02-02-2023424CFDI_S000000334.pdf',
                'xml' => null,
                'factura_id' => 424,
                'created_at' => '2023-02-02 14:01:46',
                'updated_at' => '2023-02-02 14:01:46',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            424 =>
            array(

                'pdf' => '02-02-2023425CFDI_S000000420.pdf',
                'xml' => '02-02-2023425CFDI_S000000420.xml',
                'factura_id' => 425,
                'created_at' => '2023-02-02 14:22:06',
                'updated_at' => '2023-02-02 14:22:07',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            425 =>
            array(

                'pdf' => '02-02-2023426CFDI_S000000458.pdf',
                'xml' => '02-02-2023426CFDI_S000000458.xml',
                'factura_id' => 426,
                'created_at' => '2023-02-02 14:58:29',
                'updated_at' => '2023-02-02 14:58:29',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            426 =>
            array(

                'pdf' => '07-02-2023427CFDI_C000000052.pdf',
                'xml' => '07-02-2023427CFDI_C000000052.xml',
                'factura_id' => 427,
                'created_at' => '2023-02-07 14:28:24',
                'updated_at' => '2023-02-07 14:28:25',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            427 =>
            array(

                'pdf' => '07-02-2023428CFDI_C000000053.pdf',
                'xml' => '07-02-2023428CFDI_C000000053.xml',
                'factura_id' => 428,
                'created_at' => '2023-02-07 14:30:26',
                'updated_at' => '2023-02-07 14:30:26',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            428 =>
            array(

                'pdf' => '07-02-2023429SCD9402285U7FC0000000007.pdf',
                'xml' => '07-02-2023429SCD9402285U7FC0000000007.xml',
                'factura_id' => 429,
                'created_at' => '2023-02-07 14:35:57',
                'updated_at' => '2023-02-07 14:35:57',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            429 =>
            array(

                'pdf' => '07-02-2023430SCD9402285U7FC0000000023.pdf',
                'xml' => '07-02-2023430SCD9402285U7FC0000000023.xml',
                'factura_id' => 430,
                'created_at' => '2023-02-07 14:37:35',
                'updated_at' => '2023-02-07 14:37:36',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            430 =>
            array(

                'pdf' => '15-02-2023431CFDI_S000000702.pdf',
                'xml' => '15-02-2023431CFDI_S000000702.xml',
                'factura_id' => 431,
                'created_at' => '2023-02-15 10:26:05',
                'updated_at' => '2023-02-15 10:26:06',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            431 =>
            array(

                'pdf' => '07-03-2023432CFDI_S000000784.pdf',
                'xml' => '07-03-2023432CFDI_S000000784.xml',
                'factura_id' => 432,
                'created_at' => '2023-03-07 11:58:29',
                'updated_at' => '2023-03-07 11:58:29',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            432 =>
            array(

                'pdf' => '07-03-2023433CFDI_S000000738.pdf',
                'xml' => '07-03-2023433CFDI_S000000738.xml',
                'factura_id' => 433,
                'created_at' => '2023-03-07 13:12:39',
                'updated_at' => '2023-03-07 13:12:40',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            433 =>
            array(

                'pdf' => '07-03-2023434ARA900710AX8FC0000000025.pdf',
                'xml' => '07-03-2023434ARA900710AX8FC0000000025.xml',
                'factura_id' => 434,
                'created_at' => '2023-03-07 14:00:55',
                'updated_at' => '2023-03-07 14:00:55',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            434 =>
            array(

                'pdf' => NULL,
                'xml' => NULL,
                'factura_id' => 435,
                'created_at' => '2023-03-15 13:20:16',
                'updated_at' => '2023-03-15 13:20:16',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => NULL,
            ),
            435 =>
            array(

                'pdf' => NULL,
                'xml' => NULL,
                'factura_id' => 436,
                'created_at' => '2023-03-15 13:23:02',
                'updated_at' => '2023-03-15 13:23:02',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => NULL,
            ),
            436 =>
            array(

                'pdf' => '05-04-2023437CFDI_S000000775.pdf',
                'xml' => '05-04-2023437CFDI_S000000775.xml',
                'factura_id' => 437,
                'created_at' => '2023-04-05 13:28:44',
                'updated_at' => '2023-04-05 13:28:44',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            437 =>
            array(

                'pdf' => '05-04-2023438CFDI_S000000776.pdf',
                'xml' => '05-04-2023438CFDI_S000000776.xml',
                'factura_id' => 438,
                'created_at' => '2023-04-05 14:43:03',
                'updated_at' => '2023-04-05 14:43:03',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            438 =>
            array(

                'pdf' => '05-04-2023439CFDI_S000000778.pdf',
                'xml' => '05-04-2023439CFDI_S000000778.xml',
                'factura_id' => 439,
                'created_at' => '2023-04-05 14:45:02',
                'updated_at' => '2023-04-05 14:45:02',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            439 =>
            array(

                'pdf' => '05-04-2023440CFDI_S000000793.pdf',
                'xml' => '05-04-2023440CFDI_S000000793.xml',
                'factura_id' => 440,
                'created_at' => '2023-04-05 14:52:42',
                'updated_at' => '2023-04-05 14:52:43',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            440 =>
            array(

                'pdf' => '06-04-2023441CFDI_S000000794.pdf',
                'xml' => '06-04-2023441CFDI_S000000794.xml',
                'factura_id' => 441,
                'created_at' => '2023-04-06 09:18:10',
                'updated_at' => '2023-04-06 09:18:11',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            441 =>
            array(

                'pdf' => '06-04-2023442CFDI_S000000814.pdf',
                'xml' => '06-04-2023442CFDI_S000000814.xml',
                'factura_id' => 442,
                'created_at' => '2023-04-06 09:23:54',
                'updated_at' => '2023-04-06 09:23:55',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            442 =>
            array(

                'pdf' => '06-04-2023443CFDI_S000000815.pdf',
                'xml' => '06-04-2023443CFDI_S000000815.xml',
                'factura_id' => 443,
                'created_at' => '2023-04-06 09:27:05',
                'updated_at' => '2023-04-06 09:27:05',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            443 =>
            array(

                'pdf' => '06-04-2023444CFDI_S000000836.pdf',
                'xml' => '06-04-2023444CFDI_S000000836.xml',
                'factura_id' => 444,
                'created_at' => '2023-04-06 09:29:58',
                'updated_at' => '2023-04-06 09:29:58',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            444 =>
            array(

                'pdf' => '06-04-2023445CFDI_S000000836.pdf',
                'xml' => '06-04-2023445CFDI_S000000836.xml',
                'factura_id' => 445,
                'created_at' => '2023-04-06 09:31:52',
                'updated_at' => '2023-04-06 09:31:52',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            445 =>
            array(

                'pdf' => '06-04-2023446CFDI_S000000837.pdf',
                'xml' => '06-04-2023446CFDI_S000000837.xml',
                'factura_id' => 446,
                'created_at' => '2023-04-06 09:33:56',
                'updated_at' => '2023-04-06 09:33:56',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            446 =>
            array(

                'pdf' => '06-04-2023447CFDI_S000000870.pdf',
                'xml' => '06-04-2023447CFDI_S000000870.xml',
                'factura_id' => 447,
                'created_at' => '2023-04-06 09:36:18',
                'updated_at' => '2023-04-06 09:36:19',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            447 =>
            array(

                'pdf' => '06-04-2023448CFDI_S000000872.pdf',
                'xml' => '06-04-2023448CFDI_S000000872.xml',
                'factura_id' => 448,
                'created_at' => '2023-04-06 09:41:37',
                'updated_at' => '2023-04-06 09:41:37',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            448 =>
            array(

                'pdf' => '06-04-2023449BVM951002LX0SS0000000933.pdf',
                'xml' => '06-04-2023449BVM951002LX0SS0000000933.xml',
                'factura_id' => 449,
                'created_at' => '2023-04-06 09:46:12',
                'updated_at' => '2023-04-06 09:46:12',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            449 =>
            array(

                'pdf' => '06-04-2023450BVM951002LX0SS0000000934.pdf',
                'xml' => '06-04-2023450BVM951002LX0SS0000000943.xml',
                'factura_id' => 450,
                'created_at' => '2023-04-06 09:50:37',
                'updated_at' => '2023-04-06 09:50:37',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            450 =>
            array(

                'pdf' => '06-04-2023451BVM951002LX0SS0000000934.pdf',
                'xml' => '06-04-2023451BVM951002LX0SS0000000943.xml',
                'factura_id' => 451,
                'created_at' => '2023-04-06 09:56:03',
                'updated_at' => '2023-04-06 09:56:03',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            451 =>
            array(

                'pdf' => '06-04-2023452BVM951002LX0SS0000000944.pdf',
                'xml' => '06-04-2023452BVM951002LX0SS0000000944.xml',
                'factura_id' => 452,
                'created_at' => '2023-04-06 10:05:03',
                'updated_at' => '2023-04-06 10:05:03',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            452 =>
            array(

                'pdf' => '06-04-2023453BVM951002LX0SS0000000974.pdf',
                'xml' => '06-04-2023453BVM951002LX0SS0000000974.xml',
                'factura_id' => 453,
                'created_at' => '2023-04-06 10:12:36',
                'updated_at' => '2023-04-06 10:12:37',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            453 =>
            array(

                'pdf' => '06-04-2023454BVM951002LX0SS0000000975.pdf',
                'xml' => '06-04-2023454BVM951002LX0SS0000000975.xml',
                'factura_id' => 454,
                'created_at' => '2023-04-06 10:15:09',
                'updated_at' => '2023-04-06 10:15:10',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            454 =>
            array(

                'pdf' => '06-04-2023455BVM951002LX0SS0000001024.pdf',
                'xml' => '06-04-2023455BVM951002LX0SS0000001024.xml',
                'factura_id' => 455,
                'created_at' => '2023-04-06 10:16:41',
                'updated_at' => '2023-04-06 10:16:42',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            455 =>
            array(

                'pdf' => '06-04-2023456BVM951002LX0SS0000001025.pdf',
                'xml' => '06-04-2023456BVM951002LX0SS0000001025.xml',
                'factura_id' => 456,
                'created_at' => '2023-04-06 10:20:01',
                'updated_at' => '2023-04-06 10:20:01',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            456 =>
            array(

                'pdf' => '06-04-2023457BVM951002LX0SS0000001026.pdf',
                'xml' => '06-04-2023457BVM951002LX0SS0000001026.xml',
                'factura_id' => 457,
                'created_at' => '2023-04-06 10:21:57',
                'updated_at' => '2023-04-06 10:21:57',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            457 =>
            array(

                'pdf' => '06-04-2023458BVM951002LX0SS0000001027.pdf',
                'xml' => '06-04-2023458BVM951002LX0SS0000001027.xml',
                'factura_id' => 458,
                'created_at' => '2023-04-06 10:23:19',
                'updated_at' => '2023-04-06 10:23:20',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            458 =>
            array(

                'pdf' => '06-04-2023459HPA0308089D4FC0000000026.pdf',
                'xml' => '06-04-2023459HPA0308089D4FC0000000026.xml',
                'factura_id' => 459,
                'created_at' => '2023-04-06 11:28:49',
                'updated_at' => '2023-04-06 11:28:50',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            459 =>
            array(

                'pdf' => '06-04-2023460KST211015QL8FC0000000030.pdf',
                'xml' => '06-04-2023460KST211015QL8FC0000000030.xml',
                'factura_id' => 460,
                'created_at' => '2023-04-06 11:35:42',
                'updated_at' => '2023-04-06 11:35:43',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            460 =>
            array(

                'pdf' => '06-04-2023461PME380607P35SS0000001101.pdf',
                'xml' => '06-04-2023461PME380607P35SS0000001101.xml',
                'factura_id' => 461,
                'created_at' => '2023-04-06 11:48:03',
                'updated_at' => '2023-04-06 11:48:03',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            461 =>
            array(

                'pdf' => '06-04-2023462PME380607P35SS0000001102.pdf',
                'xml' => '06-04-2023462PME380607P35SS0000001102.xml',
                'factura_id' => 462,
                'created_at' => '2023-04-06 11:50:06',
                'updated_at' => '2023-04-06 11:50:06',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            462 =>
            array(

                'pdf' => '06-04-2023463BAN500901167SS0000001061.pdf',
                'xml' => null,
                'factura_id' => 463,
                'created_at' => '2023-04-06 12:08:47',
                'updated_at' => '2023-04-06 12:08:47',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            463 =>
            array(

                'pdf' => '06-04-2023464BAN500901167SS0000001063.pdf',
                'xml' => null,
                'factura_id' => 464,
                'created_at' => '2023-04-06 12:10:53',
                'updated_at' => '2023-04-06 12:10:53',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            464 =>
            array(

                'pdf' => '06-04-2023465BAN500901167SS0000001064.pdf',
                'xml' => null,
                'factura_id' => 465,
                'created_at' => '2023-04-06 12:14:26',
                'updated_at' => '2023-04-06 12:14:26',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            465 =>
            array(

                'pdf' => '06-04-2023466BAN500901167SS0000001065.pdf',
                'xml' => null,
                'factura_id' => 466,
                'created_at' => '2023-04-06 12:18:42',
                'updated_at' => '2023-04-06 12:18:42',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            466 =>
            array(

                'pdf' => '06-04-2023467BAN500901167SS0000001066.pdf',
                'xml' => null,
                'factura_id' => 467,
                'created_at' => '2023-04-06 12:20:25',
                'updated_at' => '2023-04-06 12:20:25',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            467 =>
            array(

                'pdf' => '06-04-2023468ILI0805169R6FC0000000018.pdf',
                'xml' => '06-04-2023468ILI0805169R6FC0000000018.xml',
                'factura_id' => 468,
                'created_at' => '2023-04-06 12:28:22',
                'updated_at' => '2023-04-06 12:28:22',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            468 =>
            array(

                'pdf' => '06-04-2023469DCO8009185Y9FC0000000011.pdf',
                'xml' => '06-04-2023469DCO8009185Y9FC0000000011.xml',
                'factura_id' => 469,
                'created_at' => '2023-04-06 12:34:31',
                'updated_at' => '2023-04-06 12:34:31',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            469 =>
            array(

                'pdf' => '06-04-2023470BNE820901682SS0000001060.pdf',
                'xml' => '06-04-2023470BNE820901682SS0000001060.xml',
                'factura_id' => 470,
                'created_at' => '2023-04-06 14:38:16',
                'updated_at' => '2023-04-06 14:38:17',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            470 =>
            array(

                'pdf' => '06-04-2023471DEX140206K32SS0000001052.pdf',
                'xml' => '06-04-2023471DEX140206K32SS0000001052.xml',
                'factura_id' => 471,
                'created_at' => '2023-04-06 14:54:26',
                'updated_at' => '2023-04-06 14:54:26',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            471 =>
            array(

                'pdf' => '11-04-2023472236. ASSESSOR prefactura 1 de 2.pdf',
                'xml' => '11-04-2023472AAL090122S23FC0000000020.xml',
                'factura_id' => 472,
                'created_at' => '2023-04-11 09:17:18',
                'updated_at' => '2023-04-11 09:17:18',
                'deleted_at' => null,
                'created_by' => 18,
                'updated_by' => 18,
            ),
            472 =>
            array(

                'pdf' => '11-04-2023473236. ASSESSOR prefactura 1 de 2.pdf',
                'xml' => '11-04-2023473AAL090122S23FC0000000020.xml',
                'factura_id' => 473,
                'created_at' => '2023-04-11 09:18:58',
                'updated_at' => '2023-04-11 09:18:59',
                'deleted_at' => null,
                'created_by' => 18,
                'updated_by' => 18,
            ),
            473 =>
            array(

                'pdf' => '11-04-2023474236. ASSESSOR prefactura 1 de 2.pdf',
                'xml' => '11-04-2023474AAL090122S23FC0000000020.xml',
                'factura_id' => 474,
                'created_at' => '2023-04-11 10:34:41',
                'updated_at' => '2023-04-11 10:34:41',
                'deleted_at' => null,
                'created_by' => 18,
                'updated_by' => 18,
            ),
            474 =>
            array(

                'pdf' => '11-04-2023475236. ASSESSOR prefactura 2 de 2.pdf',
                'xml' => '11-04-2023475AAL090122S23FC0000000024.xml',
                'factura_id' => 475,
                'created_at' => '2023-04-11 10:36:31',
                'updated_at' => '2023-04-11 10:36:32',
                'deleted_at' => null,
                'created_by' => 18,
                'updated_by' => 18,
            ),
            475 =>
            array(

                'pdf' => '11-04-2023476CFDI_S000000817.pdf',
                'xml' => '11-04-2023476CFDI_S000000817.xml',
                'factura_id' => 476,
                'created_at' => '2023-04-11 10:38:42',
                'updated_at' => '2023-04-11 10:38:42',
                'deleted_at' => null,
                'created_by' => 18,
                'updated_by' => 18,
            ),
            476 =>
            array(

                'pdf' => '11-04-2023477CFDI_CPB0000451.pdf',
                'xml' => '11-04-2023477CFDI_CPB0000451.xml',
                'factura_id' => 477,
                'created_at' => '2023-04-11 10:40:18',
                'updated_at' => '2023-04-11 10:40:19',
                'deleted_at' => null,
                'created_by' => 18,
                'updated_by' => 18,
            ),
            477 =>
            array(

                'pdf' => '11-04-2023478CFDI_S000000840.pdf',
                'xml' => '11-04-2023478CFDI_S000000840.xml',
                'factura_id' => 478,
                'created_at' => '2023-04-11 10:41:13',
                'updated_at' => '2023-04-11 10:41:13',
                'deleted_at' => null,
                'created_by' => 18,
                'updated_by' => 18,
            ),
            478 =>
            array(

                'pdf' => '11-04-2023479CSE750917BG3SS0000001073.pdf',
                'xml' => '11-04-2023479CSE750917BG3SS0000001073.xml',
                'factura_id' => 479,
                'created_at' => '2023-04-11 10:45:36',
                'updated_at' => '2023-04-11 10:45:36',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            479 =>
            array(

                'pdf' => '11-04-2023480CSE750917BG3SS0000001093.pdf',
                'xml' => '11-04-2023480CSE750917BG3SS0000001093.xml',
                'factura_id' => 480,
                'created_at' => '2023-04-11 10:49:19',
                'updated_at' => '2023-04-11 10:49:20',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            480 =>
            array(

                'pdf' => '11-04-2023481CFDI_S000000820.pdf',
                'xml' => '11-04-2023481CFDI_S000000820.xml',
                'factura_id' => 481,
                'created_at' => '2023-04-11 10:59:01',
                'updated_at' => '2023-04-11 10:59:01',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            481 =>
            array(

                'pdf' => '11-04-2023482CFDI_S000000838.pdf',
                'xml' => '11-04-2023482CFDI_S000000838.xml',
                'factura_id' => 482,
                'created_at' => '2023-04-11 11:02:13',
                'updated_at' => '2023-04-11 11:02:13',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            482 =>
            array(

                'pdf' => '11-04-2023483CFDI_S000000869.pdf',
                'xml' => '11-04-2023483CFDI_S000000869.xml',
                'factura_id' => 483,
                'created_at' => '2023-04-11 11:03:14',
                'updated_at' => '2023-04-11 11:03:14',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            483 =>
            array(

                'pdf' => '11-04-2023484SNS960412AH4SS0000000927.pdf',
                'xml' => '11-04-2023484SNS960412AH4SS0000000927.xml',
                'factura_id' => 484,
                'created_at' => '2023-04-11 11:28:40',
                'updated_at' => '2023-04-11 11:28:40',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            484 =>
            array(

                'pdf' => '11-04-2023485SNS960412AH4SS0000000947.pdf',
                'xml' => '11-04-2023485SNS960412AH4SS0000000947.xml',
                'factura_id' => 485,
                'created_at' => '2023-04-11 11:31:58',
                'updated_at' => '2023-04-11 11:31:59',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            485 =>
            array(

                'pdf' => '11-04-2023486SNS960412AH4SS0000000987.pdf',
                'xml' => '11-04-2023486SNS960412AH4SS0000000987.xml',
                'factura_id' => 486,
                'created_at' => '2023-04-11 11:33:08',
                'updated_at' => '2023-04-11 11:33:09',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            486 =>
            array(

                'pdf' => '11-04-2023487SNS960412AH4SS0000001014.pdf',
                'xml' => '11-04-2023487SNS960412AH4SS0000001014.xml',
                'factura_id' => 487,
                'created_at' => '2023-04-11 11:33:53',
                'updated_at' => '2023-04-11 11:33:53',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            487 =>
            array(

                'pdf' => '11-04-2023488SNS960412AH4SS0000001047.pdf',
                'xml' => '11-04-2023488SNS960412AH4SS0000001047.xml',
                'factura_id' => 488,
                'created_at' => '2023-04-11 11:34:55',
                'updated_at' => '2023-04-11 11:34:55',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            488 =>
            array(

                'pdf' => '11-04-2023489SNS960412AH4SS0000000925.pdf',
                'xml' => '11-04-2023489SNS960412AH4SS0000000925.xml',
                'factura_id' => 489,
                'created_at' => '2023-04-11 11:36:42',
                'updated_at' => '2023-04-11 11:36:42',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            489 =>
            array(

                'pdf' => '11-04-2023490SNS960412AH4SS0000001079.pdf',
                'xml' => '11-04-2023490SNS960412AH4SS0000001079.xml',
                'factura_id' => 490,
                'created_at' => '2023-04-11 11:38:55',
                'updated_at' => '2023-04-11 11:38:56',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            490 =>
            array(

                'pdf' => '11-04-2023491CFDI_S000000821.pdf',
                'xml' => '11-04-2023491CFDI_S000000821.xml',
                'factura_id' => 491,
                'created_at' => '2023-04-11 12:23:04',
                'updated_at' => '2023-04-11 12:23:04',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            491 =>
            array(

                'pdf' => '11-04-2023492CFDI_S000000847.pdf',
                'xml' => '11-04-2023492CFDI_S000000847.xml',
                'factura_id' => 492,
                'created_at' => '2023-04-11 12:25:43',
                'updated_at' => '2023-04-11 12:25:43',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            492 =>
            array(

                'pdf' => '11-04-2023493CFDI_S000000874.pdf',
                'xml' => '11-04-2023493CFDI_S000000874.xml',
                'factura_id' => 493,
                'created_at' => '2023-04-11 12:26:59',
                'updated_at' => '2023-04-11 12:27:00',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            493 =>
            array(

                'pdf' => '11-04-2023494CSE750917BG3SS0000000932.pdf',
                'xml' => '11-04-2023494CSE750917BG3SS0000000932.xml',
                'factura_id' => 494,
                'created_at' => '2023-04-11 12:28:49',
                'updated_at' => '2023-04-11 12:28:49',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            494 =>
            array(

                'pdf' => '11-04-2023495CSE750917BG3SS0000000958.pdf',
                'xml' => '11-04-2023495CSE750917BG3SS0000000958.xml',
                'factura_id' => 495,
                'created_at' => '2023-04-11 12:30:14',
                'updated_at' => '2023-04-11 12:30:14',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            495 =>
            array(

                'pdf' => '11-04-2023496CSE750917BG3SS0000000990.pdf',
                'xml' => '11-04-2023496CSE750917BG3SS0000000990.xml',
                'factura_id' => 496,
                'created_at' => '2023-04-11 12:31:14',
                'updated_at' => '2023-04-11 12:31:15',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            496 =>
            array(

                'pdf' => '11-04-2023497CSE750917BG3SS0000001029.pdf',
                'xml' => '11-04-2023497CSE750917BG3SS0000001029.xml',
                'factura_id' => 497,
                'created_at' => '2023-04-11 12:32:58',
                'updated_at' => '2023-04-11 12:32:58',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            497 =>
            array(

                'pdf' => '11-04-2023498CSE750917BG3SS0000001030.pdf',
                'xml' => '11-04-2023498CSE750917BG3SS0000001030.xml',
                'factura_id' => 498,
                'created_at' => '2023-04-11 12:33:42',
                'updated_at' => '2023-04-11 12:33:42',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            498 =>
            array(

                'pdf' => '11-04-2023499CFDI_S000000854.pdf',
                'xml' => '11-04-2023499CFDI_S000000854.xml',
                'factura_id' => 499,
                'created_at' => '2023-04-11 13:12:36',
                'updated_at' => '2023-04-11 13:12:37',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            499 =>
            array(

                'pdf' => '11-04-2023500OPE070326DNASS0000001041.pdf',
                'xml' => '11-04-2023500OPE070326DNASS0000001041.xml',
                'factura_id' => 500,
                'created_at' => '2023-04-11 13:37:23',
                'updated_at' => '2023-04-11 13:37:23',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
        ));
        \DB::table('facturas_files')->insert(array(
            0 =>
            array(

                'pdf' => '11-04-2023501OPE070326DNASS0000001042.pdf',
                'xml' => '11-04-2023501OPE070326DNASS0000001042.xml',
                'factura_id' => 501,
                'created_at' => '2023-04-11 15:28:09',
                'updated_at' => '2023-04-11 15:28:09',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            1 =>
            array(

                'pdf' => '16-05-2023502OPE070326DNASS0000001081.pdf',
                'xml' => '16-05-2023502OPE070326DNASS0000001081.xml',
                'factura_id' => 502,
                'created_at' => '2023-04-11 15:29:28',
                'updated_at' => '2023-05-16 16:47:21',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            2 =>
            array(

                'pdf' => '11-04-2023503OPE070326DNASS0000001106.pdf',
                'xml' => '11-04-2023503OPE070326DNASS0000001106.xml',
                'factura_id' => 503,
                'created_at' => '2023-04-11 15:31:01',
                'updated_at' => '2023-04-11 15:31:01',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            3 =>
            array(

                'pdf' => '11-04-2023504OPE070326DNASS0000001106.pdf',
                'xml' => '11-04-2023504OPE070326DNASS0000001106.xml',
                'factura_id' => 504,
                'created_at' => '2023-04-11 15:32:42',
                'updated_at' => '2023-04-11 15:32:42',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            4 =>
            array(

                'pdf' => '11-04-2023505OPE070326DNASS0000001107.pdf',
                'xml' => '11-04-2023505OPE070326DNASS0000001107.xml',
                'factura_id' => 505,
                'created_at' => '2023-04-11 15:34:02',
                'updated_at' => '2023-04-11 15:34:03',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            5 =>
            array(

                'pdf' => '11-04-2023506OPE070326DNASS0000001108.pdf',
                'xml' => '11-04-2023506OPE070326DNASS0000001108.xml',
                'factura_id' => 506,
                'created_at' => '2023-04-11 15:35:41',
                'updated_at' => '2023-04-11 15:35:41',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            6 =>
            array(

                'pdf' => '11-04-2023507OPE070326DNASS0000001110.pdf',
                'xml' => '11-04-2023507OPE070326DNASS0000001110.xml',
                'factura_id' => 507,
                'created_at' => '2023-04-11 15:38:34',
                'updated_at' => '2023-04-11 15:38:34',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            7 =>
            array(

                'pdf' => '11-04-2023508ASE120613F72FC0000000017.pdf',
                'xml' => '11-04-2023508ASE120613F72FC0000000017.xml',
                'factura_id' => 508,
                'created_at' => '2023-04-11 15:45:39',
                'updated_at' => '2023-04-11 15:45:40',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            8 =>
            array(

                'pdf' => '11-04-2023509CRE9510319D3SS0000000995.pdf',
                'xml' => '11-04-2023509CRE9510319D3SS0000000995.xml',
                'factura_id' => 509,
                'created_at' => '2023-04-11 15:52:33',
                'updated_at' => '2023-04-11 15:52:33',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            9 =>
            array(

                'pdf' => '11-04-2023510CRE9510319D3SS0000001091.pdf',
                'xml' => '11-04-2023510CRE9510319D3SS0000001091.xml',
                'factura_id' => 510,
                'created_at' => '2023-04-11 15:54:08',
                'updated_at' => '2023-04-11 15:54:08',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            10 =>
            array(

                'pdf' => '11-04-2023511TEP961122B8ASS0000000918.pdf',
                'xml' => '11-04-2023511TEP961122B8ASS0000000918.xml',
                'factura_id' => 511,
                'created_at' => '2023-04-11 16:11:43',
                'updated_at' => '2023-04-11 16:11:44',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            11 =>
            array(

                'pdf' => '11-04-2023512TEP961122B8ASS0000001078.pdf',
                'xml' => '11-04-2023512TEP961122B8ASS0000001078.xml',
                'factura_id' => 512,
                'created_at' => '2023-04-11 16:13:46',
                'updated_at' => '2023-04-11 16:13:46',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            12 =>
            array(

                'pdf' => '11-04-2023513TEP961122B8ASS0000001111.pdf',
                'xml' => '11-04-2023513TEP961122B8ASS0000001111.xml',
                'factura_id' => 513,
                'created_at' => '2023-04-11 16:14:27',
                'updated_at' => '2023-04-11 16:14:27',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            13 =>
            array(

                'pdf' => '12-04-2023514CFDI_S000000835.pdf',
                'xml' => '12-04-2023514CFDI_S000000835.xml',
                'factura_id' => 514,
                'created_at' => '2023-04-12 14:05:09',
                'updated_at' => '2023-04-12 14:05:10',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            14 =>
            array(

                'pdf' => '12-04-2023515CFDI_S000000879.pdf',
                'xml' => '12-04-2023515CFDI_S000000879.xml',
                'factura_id' => 515,
                'created_at' => '2023-04-12 14:10:54',
                'updated_at' => '2023-04-12 14:10:54',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            15 =>
            array(

                'pdf' => '12-04-2023516CFDI_S000000775.pdf',
                'xml' => '12-04-2023516CFDI_S000000775.xml',
                'factura_id' => 516,
                'created_at' => '2023-04-12 14:26:53',
                'updated_at' => '2023-04-12 14:26:54',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            16 =>
            array(

                'pdf' => '12-04-2023517CFDI_C000000097.pdf',
                'xml' => '12-04-2023517CFDI_C000000097.xml',
                'factura_id' => 517,
                'created_at' => '2023-04-12 14:57:39',
                'updated_at' => '2023-04-12 14:57:39',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            17 =>
            array(

                'pdf' => '13-04-2023518CFDI_S000000505.pdf',
                'xml' => '13-04-2023518CFDI_S000000505.xml',
                'factura_id' => 518,
                'created_at' => '2023-04-13 10:08:54',
                'updated_at' => '2023-04-13 10:08:54',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            18 =>
            array(

                'pdf' => '13-04-2023519Silentbusiness.pdf',
                'xml' => '13-04-2023519655B9492-E9E4-4C93-B4F5-A523CD74E81F.xml',
                'factura_id' => 519,
                'created_at' => '2023-04-13 13:13:37',
                'updated_at' => '2023-04-13 13:13:38',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => 1,
            ),
            19 =>
            array(

                'pdf' => '14-04-2023520FNP070401RN9SS0000001028.pdf',
                'xml' => '14-04-2023520FNP070401RN9SS0000001028.xml',
                'factura_id' => 520,
                'created_at' => '2023-04-14 10:11:21',
                'updated_at' => '2023-04-14 10:11:21',
                'deleted_at' => null,
                'created_by' => 19,
                'updated_by' => 19,
            ),
            20 =>
            array(

                'pdf' => '26-04-2023521FNP070401RN9SS0000001028.pdf',
                'xml' => '26-04-2023521FNP070401RN9SS0000001028.xml',
                'factura_id' => 521,
                'created_at' => '2023-04-14 10:55:40',
                'updated_at' => '2023-04-26 11:52:12',
                'deleted_at' => null,
                'created_by' => 19,
                'updated_by' => 20,
            ),
            21 =>
            array(

                'pdf' => '14-04-2023522CFDI_S000000721.pdf',
                'xml' => '14-04-2023522CFDI_S000000721.xml',
                'factura_id' => 522,
                'created_at' => '2023-04-14 11:18:07',
                'updated_at' => '2023-04-14 11:18:07',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            22 =>
            array(

                'pdf' => '14-04-2023523ASF001230TS2SS0000000903.pdf',
                'xml' => '14-04-2023523ASF001230TS2SS0000000903.xml',
                'factura_id' => 523,
                'created_at' => '2023-04-14 11:22:30',
                'updated_at' => '2023-04-14 11:22:31',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            23 =>
            array(

                'pdf' => '14-04-2023524ASF001230TS2SS0000000969.pdf',
                'xml' => '14-04-2023524ASF001230TS2SS0000000969.xml',
                'factura_id' => 524,
                'created_at' => '2023-04-14 11:24:30',
                'updated_at' => '2023-04-14 11:24:30',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            24 =>
            array(

                'pdf' => '14-04-2023525ASF001230TS2SS0000001031.pdf',
                'xml' => '14-04-2023525ASF001230TS2SS0000001031.xml',
                'factura_id' => 525,
                'created_at' => '2023-04-14 11:32:10',
                'updated_at' => '2023-04-14 11:32:11',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            25 =>
            array(

                'pdf' => '14-04-2023526BVM951002LX0SS0000000920.pdf',
                'xml' => '14-04-2023526BVM951002LX0SS0000000920.xml',
                'factura_id' => 526,
                'created_at' => '2023-04-14 15:52:04',
                'updated_at' => '2023-04-14 15:52:04',
                'deleted_at' => null,
                'created_by' => 19,
                'updated_by' => 19,
            ),
            26 =>
            array(

                'pdf' => NULL,
                'xml' => '14-04-2023527BVM951002LX0SS0000000919.xml',
                'factura_id' => 527,
                'created_at' => '2023-04-14 15:53:41',
                'updated_at' => '2023-04-14 15:53:42',
                'deleted_at' => null,
                'created_by' => 19,
                'updated_by' => 19,
            ),
            27 =>
            array(

                'pdf' => '14-04-2023528BVM951002LX0SS0000001085.pdf',
                'xml' => '14-04-2023528BVM951002LX0SS0000001085.xml',
                'factura_id' => 528,
                'created_at' => '2023-04-14 15:55:52',
                'updated_at' => '2023-04-14 15:55:52',
                'deleted_at' => null,
                'created_by' => 19,
                'updated_by' => 19,
            ),
            28 =>
            array(

                'pdf' => '14-04-2023529BVM951002LX0SS0000001086.pdf',
                'xml' => '14-04-2023529BVM951002LX0SS0000001086.xml',
                'factura_id' => 529,
                'created_at' => '2023-04-14 15:56:44',
                'updated_at' => '2023-04-14 15:56:44',
                'deleted_at' => null,
                'created_by' => 19,
                'updated_by' => 19,
            ),
            29 =>
            array(

                'pdf' => NULL,
                'xml' => NULL,
                'factura_id' => 530,
                'created_at' => '2023-04-14 15:58:28',
                'updated_at' => '2023-04-14 15:58:28',
                'deleted_at' => null,
                'created_by' => 19,
                'updated_by' => NULL,
            ),
            30 =>
            array(

                'pdf' => '14-04-2023531BVM951002LX0SS0000001104.pdf',
                'xml' => '14-04-2023531BVM951002LX0SS0000001103.xml',
                'factura_id' => 531,
                'created_at' => '2023-04-14 16:00:25',
                'updated_at' => '2023-04-14 16:00:25',
                'deleted_at' => null,
                'created_by' => 19,
                'updated_by' => 19,
            ),
            31 =>
            array(

                'pdf' => '17-04-2023532SEP1312171X9SS0000001090.pdf',
                'xml' => '17-04-2023532SEP1312171X9SS0000001090.xml',
                'factura_id' => 532,
                'created_at' => '2023-04-17 12:17:06',
                'updated_at' => '2023-04-17 12:17:06',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            32 =>
            array(

                'pdf' => '17-04-2023533BID100428IX6SS0000000906.pdf',
                'xml' => '17-04-2023533BID100428IX6SS0000000906.xml',
                'factura_id' => 533,
                'created_at' => '2023-04-17 12:33:53',
                'updated_at' => '2023-04-17 12:33:53',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            33 =>
            array(

                'pdf' => '17-04-2023534BID100428IX6SS0000000962.pdf',
                'xml' => '17-04-2023534BID100428IX6SS0000000962.xml',
                'factura_id' => 534,
                'created_at' => '2023-04-17 12:36:53',
                'updated_at' => '2023-04-17 12:36:53',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            34 =>
            array(

                'pdf' => '17-04-2023535BID100428IX6SS0000000980.pdf',
                'xml' => '17-04-2023535BID100428IX6SS0000000980.xml',
                'factura_id' => 535,
                'created_at' => '2023-04-17 12:37:48',
                'updated_at' => '2023-04-17 12:37:49',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            35 =>
            array(

                'pdf' => '17-04-2023536BID100428IX6SS0000001019.pdf',
                'xml' => '17-04-2023536BID100428IX6SS0000001019.xml',
                'factura_id' => 536,
                'created_at' => '2023-04-17 12:38:43',
                'updated_at' => '2023-04-17 12:38:43',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            36 =>
            array(

                'pdf' => '17-04-2023537BID100428IX6SS0000000914.pdf',
                'xml' => '17-04-2023537BID100428IX6SS0000000914.xml',
                'factura_id' => 537,
                'created_at' => '2023-04-17 12:39:59',
                'updated_at' => '2023-04-17 12:39:59',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            37 =>
            array(

                'pdf' => '17-04-2023538BID100428IX6SS0000000991.pdf',
                'xml' => '17-04-2023538BID100428IX6SS0000000991.xml',
                'factura_id' => 538,
                'created_at' => '2023-04-17 12:47:11',
                'updated_at' => '2023-04-17 12:47:11',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            38 =>
            array(

                'pdf' => '17-04-2023539BMV760203JD4SS0000000891.pdf',
                'xml' => '17-04-2023539BMV760203JD4SS0000000891.xml',
                'factura_id' => 539,
                'created_at' => '2023-04-17 12:50:55',
                'updated_at' => '2023-04-17 12:50:55',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            39 =>
            array(

                'pdf' => '17-04-2023540BMV760203JD4SS0000000907.pdf',
                'xml' => '17-04-2023540BMV760203JD4SS0000000907.xml',
                'factura_id' => 540,
                'created_at' => '2023-04-17 12:52:08',
                'updated_at' => '2023-04-17 12:52:08',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            40 =>
            array(

                'pdf' => '17-04-2023541BMV760203JD4SS0000000977.pdf',
                'xml' => '17-04-2023541BMV760203JD4SS0000000977.xml',
                'factura_id' => 541,
                'created_at' => '2023-04-17 12:53:04',
                'updated_at' => '2023-04-17 12:53:05',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            41 =>
            array(

                'pdf' => '17-04-2023542BMV760203JD4SS0000001020.pdf',
                'xml' => '17-04-2023542BMV760203JD4SS0000001020.xml',
                'factura_id' => 542,
                'created_at' => '2023-04-17 12:53:40',
                'updated_at' => '2023-04-17 12:53:40',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            42 =>
            array(

                'pdf' => '17-04-2023543BMV760203JD4SS0000001034.pdf',
                'xml' => '17-04-2023543BMV760203JD4SS0000001034.xml',
                'factura_id' => 543,
                'created_at' => '2023-04-17 12:54:20',
                'updated_at' => '2023-04-17 12:54:21',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            43 =>
            array(

                'pdf' => '17-04-2023544BMV760203JD4SS0000000940.pdf',
                'xml' => '17-04-2023544BMV760203JD4SS0000000940.xml',
                'factura_id' => 544,
                'created_at' => '2023-04-17 12:55:01',
                'updated_at' => '2023-04-17 12:55:01',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            44 =>
            array(

                'pdf' => '17-04-2023545BMV760203JD4SS0000000921.pdf',
                'xml' => '17-04-2023545BMV760203JD4SS0000000921.xml',
                'factura_id' => 545,
                'created_at' => '2023-04-17 12:55:42',
                'updated_at' => '2023-04-17 12:55:42',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            45 =>
            array(

                'pdf' => '17-04-2023546INE0804164Z7SS0000000938.pdf',
                'xml' => '17-04-2023546INE0804164Z7SS0000000938.xml',
                'factura_id' => 546,
                'created_at' => '2023-04-17 13:02:51',
                'updated_at' => '2023-04-17 13:02:52',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            46 =>
            array(

                'pdf' => '17-04-2023547INE0804164Z7SS0000000966.pdf',
                'xml' => '17-04-2023547INE0804164Z7SS0000000966.xml',
                'factura_id' => 547,
                'created_at' => '2023-04-17 13:03:46',
                'updated_at' => '2023-04-17 13:03:46',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            47 =>
            array(

                'pdf' => '17-04-2023548INE0804164Z7SS0000000978.pdf',
                'xml' => '17-04-2023548INE0804164Z7SS0000000978.xml',
                'factura_id' => 548,
                'created_at' => '2023-04-17 13:04:42',
                'updated_at' => '2023-04-17 13:04:42',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            48 =>
            array(

                'pdf' => '17-04-2023549INE0804164Z7SS0000001021.pdf',
                'xml' => '17-04-2023549INE0804164Z7SS0000001021.xml',
                'factura_id' => 549,
                'created_at' => '2023-04-17 13:06:09',
                'updated_at' => '2023-04-17 13:06:09',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            49 =>
            array(

                'pdf' => '17-04-2023550INE0804164Z7SS0000000993.pdf',
                'xml' => '17-04-2023550INE0804164Z7SS0000000993.xml',
                'factura_id' => 550,
                'created_at' => '2023-04-17 13:06:48',
                'updated_at' => '2023-04-17 13:06:48',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            50 =>
            array(

                'pdf' => '17-04-2023551INE0804164Z7SS0000000993.pdf',
                'xml' => '17-04-2023551INE0804164Z7SS0000000993.xml',
                'factura_id' => 551,
                'created_at' => '2023-04-17 13:07:34',
                'updated_at' => '2023-04-17 13:07:34',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            51 =>
            array(

                'pdf' => '17-04-2023552INE0804164Z7SS0000001095.pdf',
                'xml' => '17-04-2023552INE0804164Z7SS0000001095.xml',
                'factura_id' => 552,
                'created_at' => '2023-04-17 13:08:11',
                'updated_at' => '2023-04-17 13:08:12',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            52 =>
            array(

                'pdf' => '17-04-2023553INE0804164Z7SS0000001112.pdf',
                'xml' => '17-04-2023553INE0804164Z7SS0000001112.xml',
                'factura_id' => 553,
                'created_at' => '2023-04-17 13:10:37',
                'updated_at' => '2023-04-17 13:10:38',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            53 =>
            array(

                'pdf' => '17-04-2023554VTA140911DP6FC0000000031.pdf',
                'xml' => '17-04-2023554VTA140911DP6FC0000000031.xml',
                'factura_id' => 554,
                'created_at' => '2023-04-17 13:53:15',
                'updated_at' => '2023-04-17 13:53:15',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            54 =>
            array(

                'pdf' => '17-04-2023555VTA140911DP6FC0000000034.pdf',
                'xml' => '17-04-2023555VTA140911DP6FC0000000034.xml',
                'factura_id' => 555,
                'created_at' => '2023-04-17 13:53:53',
                'updated_at' => '2023-04-17 13:53:53',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            55 =>
            array(

                'pdf' => '17-04-2023556VTA140911DP6FC0000000041.pdf',
                'xml' => '17-04-2023556VTA140911DP6FC0000000041.xml',
                'factura_id' => 556,
                'created_at' => '2023-04-17 13:54:28',
                'updated_at' => '2023-04-17 13:54:28',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            56 =>
            array(

                'pdf' => '17-04-2023557DCO8009185Y9FC0000000009.pdf',
                'xml' => '17-04-2023557DCO8009185Y9FC0000000009.xml',
                'factura_id' => 557,
                'created_at' => '2023-04-17 17:48:14',
                'updated_at' => '2023-04-17 17:48:14',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            57 =>
            array(

                'pdf' => '17-04-2023558DCO8009185Y9FC0000000010.pdf',
                'xml' => '17-04-2023558DCO8009185Y9FC0000000010.xml',
                'factura_id' => 558,
                'created_at' => '2023-04-17 17:49:15',
                'updated_at' => '2023-04-17 17:49:16',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            58 =>
            array(

                'pdf' => '17-04-2023559DCO8009185Y9FC0000000032.pdf',
                'xml' => '17-04-2023559DCO8009185Y9FC0000000032.xml',
                'factura_id' => 559,
                'created_at' => '2023-04-17 17:52:37',
                'updated_at' => '2023-04-17 17:52:37',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            59 =>
            array(

                'pdf' => '17-04-2023560DCO8009185Y9FC0000000039.pdf',
                'xml' => '17-04-2023560DCO8009185Y9FC0000000039.xml',
                'factura_id' => 560,
                'created_at' => '2023-04-17 17:54:37',
                'updated_at' => '2023-04-17 17:54:37',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            60 =>
            array(

                'pdf' => '18-04-2023561SAE030617SV8SS0000000892.pdf',
                'xml' => '18-04-2023561SAE030617SV8SS0000000892.xml',
                'factura_id' => 561,
                'created_at' => '2023-04-18 10:31:16',
                'updated_at' => '2023-04-18 10:31:16',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            61 =>
            array(

                'pdf' => '18-04-2023562SAE030617SV8SS0000000910.pdf',
                'xml' => '18-04-2023562SAE030617SV8SS0000000910.xml',
                'factura_id' => 562,
                'created_at' => '2023-04-18 10:32:18',
                'updated_at' => '2023-04-18 10:32:18',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            62 =>
            array(

                'pdf' => '18-04-2023563SAE030617SV8SS0000000979.pdf',
                'xml' => '18-04-2023563SAE030617SV8SS0000000979.xml',
                'factura_id' => 563,
                'created_at' => '2023-04-18 10:33:17',
                'updated_at' => '2023-04-18 10:33:17',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            63 =>
            array(

                'pdf' => '18-04-2023564SAE030617SV8SS0000001003.pdf',
                'xml' => '18-04-2023564SAE030617SV8SS0000001003.xml',
                'factura_id' => 564,
                'created_at' => '2023-04-18 10:34:37',
                'updated_at' => '2023-04-18 10:34:37',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            64 =>
            array(

                'pdf' => '18-04-2023565SAE030617SV8SS0000001004.pdf',
                'xml' => '18-04-2023565SAE030617SV8SS0000001004.xml',
                'factura_id' => 565,
                'created_at' => '2023-04-18 10:35:20',
                'updated_at' => '2023-04-18 10:35:20',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            65 =>
            array(

                'pdf' => '18-04-2023566SAE030617SV8SS0000001006.pdf',
                'xml' => '18-04-2023566SAE030617SV8SS0000001006.xml',
                'factura_id' => 566,
                'created_at' => '2023-04-18 10:36:00',
                'updated_at' => '2023-04-18 10:36:00',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            66 =>
            array(

                'pdf' => '18-04-2023567SAE030617SV8SS0000001100.pdf',
                'xml' => '18-04-2023567SAE030617SV8SS0000001100.xml',
                'factura_id' => 567,
                'created_at' => '2023-04-18 10:36:41',
                'updated_at' => '2023-04-18 10:36:41',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            67 =>
            array(

                'pdf' => '18-04-2023568SAE030617SV8SS0000001117.pdf',
                'xml' => '18-04-2023568SAE030617SV8SS0000001117.xml',
                'factura_id' => 568,
                'created_at' => '2023-04-18 10:37:26',
                'updated_at' => '2023-04-18 10:37:26',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            68 =>
            array(

                'pdf' => NULL,
                'xml' => NULL,
                'factura_id' => 569,
                'created_at' => '2023-04-18 10:40:10',
                'updated_at' => '2023-04-18 10:40:10',
                'deleted_at' => null,
                'created_by' => 2,
                'updated_by' => NULL,
            ),
            69 =>
            array(

                'pdf' => '05-05-2023570Diagrama de Proceso de Atención Interno de Desarrollo_v1.0.pdf',
                'xml' => null,
                'factura_id' => 570,
                'created_at' => '2023-04-18 10:42:00',
                'updated_at' => '2023-05-04 19:41:31',
                'deleted_at' => null,
                'created_by' => 2,
                'updated_by' => 2,
            ),
            70 =>
            array(

                'pdf' => '18-04-2023571ASF001230TS2SS0000001023.pdf',
                'xml' => '18-04-2023571ASF001230TS2SS0000001023.xml',
                'factura_id' => 571,
                'created_at' => '2023-04-18 11:18:17',
                'updated_at' => '2023-04-18 11:18:17',
                'deleted_at' => null,
                'created_by' => 15,
                'updated_by' => 15,
            ),
            71 =>
            array(

                'pdf' => '18-04-2023572SNS960412AH4SS0000001113.pdf',
                'xml' => '18-04-2023572SNS960412AH4SS0000001113.xml',
                'factura_id' => 572,
                'created_at' => '2023-04-18 16:40:27',
                'updated_at' => '2023-04-18 16:40:28',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            72 =>
            array(

                'pdf' => '18-04-2023573CRE9510319D3SS0000001114.pdf',
                'xml' => '18-04-2023573CRE9510319D3SS0000001114.xml',
                'factura_id' => 573,
                'created_at' => '2023-04-18 16:42:42',
                'updated_at' => '2023-04-18 16:42:43',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            73 =>
            array(

                'pdf' => '18-04-2023574CSE750917BG3SS0000001118.pdf',
                'xml' => '18-04-2023574CSE750917BG3SS0000001118.xml',
                'factura_id' => 574,
                'created_at' => '2023-04-18 16:44:35',
                'updated_at' => '2023-04-18 16:44:35',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            74 =>
            array(

                'pdf' => '20-04-2023575PPL961114GZ1SS0000001077.pdf',
                'xml' => '20-04-2023575PPL961114GZ1SS0000001077.xml',
                'factura_id' => 575,
                'created_at' => '2023-04-20 13:08:38',
                'updated_at' => '2023-04-20 13:08:38',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            75 =>
            array(

                'pdf' => '24-04-2023576CFDI_S000000875.pdf',
                'xml' => '24-04-2023576CFDI_S000000875.xml',
                'factura_id' => 576,
                'created_at' => '2023-04-24 09:47:07',
                'updated_at' => '2023-04-24 09:47:07',
                'deleted_at' => null,
                'created_by' => 18,
                'updated_by' => 18,
            ),
            76 =>
            array(

                'pdf' => '24-04-2023577SEN9412287J6SS0000000936.pdf',
                'xml' => '24-04-2023577SEN9412287J6SS0000000936.xml',
                'factura_id' => 577,
                'created_at' => '2023-04-24 09:55:24',
                'updated_at' => '2023-04-24 09:55:24',
                'deleted_at' => null,
                'created_by' => 18,
                'updated_by' => 18,
            ),
            77 =>
            array(

                'pdf' => '24-04-2023578SEN9412287J6SS0000000952.pdf',
                'xml' => '24-04-2023578SEN9412287J6SS0000000952.xml',
                'factura_id' => 578,
                'created_at' => '2023-04-24 09:56:25',
                'updated_at' => '2023-04-24 09:56:25',
                'deleted_at' => null,
                'created_by' => 18,
                'updated_by' => 18,
            ),
            78 =>
            array(

                'pdf' => '24-04-2023579SEN9412287J6SS0000000981.pdf',
                'xml' => '24-04-2023579SEN9412287J6SS0000000981.xml',
                'factura_id' => 579,
                'created_at' => '2023-04-24 09:57:34',
                'updated_at' => '2023-04-24 09:57:34',
                'deleted_at' => null,
                'created_by' => 18,
                'updated_by' => 18,
            ),
            79 =>
            array(

                'pdf' => '24-04-2023580SEN9412287J6SS0000001013.pdf',
                'xml' => '24-04-2023580SEN9412287J6SS0000001013.xml',
                'factura_id' => 580,
                'created_at' => '2023-04-24 09:58:28',
                'updated_at' => '2023-04-24 09:58:29',
                'deleted_at' => null,
                'created_by' => 18,
                'updated_by' => 18,
            ),
            80 =>
            array(

                'pdf' => '24-04-2023581PPL961114GZ1SS0000001121.pdf',
                'xml' => '24-04-2023581PPL961114GZ1SS0000001121.xml',
                'factura_id' => 581,
                'created_at' => '2023-04-24 11:11:57',
                'updated_at' => '2023-04-24 11:11:57',
                'deleted_at' => null,
                'created_by' => 18,
                'updated_by' => 18,
            ),
            81 =>
            array(

                'pdf' => '24-04-2023582FNP070401RN9SS0000000877 Ampliación.pdf',
                'xml' => '24-04-2023582FNP070401RN9SS0000000877.xml',
                'factura_id' => 582,
                'created_at' => '2023-04-24 13:01:50',
                'updated_at' => '2023-04-24 13:01:50',
                'deleted_at' => null,
                'created_by' => 19,
                'updated_by' => 19,
            ),
            82 =>
            array(

                'pdf' => '26-04-2023583CFDI_S000000775.pdf',
                'xml' => '26-04-2023583CFDI_S000000775.xml',
                'factura_id' => 583,
                'created_at' => '2023-04-26 12:45:14',
                'updated_at' => '2023-04-26 12:45:15',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            83 =>
            array(

                'pdf' => '27-04-2023584CFDI_S000000632.pdf',
                'xml' => '27-04-2023584CFDI_S000000632.xml',
                'factura_id' => 584,
                'created_at' => '2023-04-27 15:44:50',
                'updated_at' => '2023-04-27 15:44:50',
                'deleted_at' => null,
                'created_by' => 20,
                'updated_by' => 20,
            ),
            84 =>
            array(

                'pdf' => '09-05-2023585HFE011011HH1SS0000001096.pdf',
                'xml' => '09-05-2023585HFE011011HH1SS0000001096.xml',
                'factura_id' => 585,
                'created_at' => '2023-05-09 09:35:44',
                'updated_at' => '2023-05-09 09:35:44',
                'deleted_at' => null,
                'created_by' => 19,
                'updated_by' => 19,
            ),
            85 =>
            array(

                'pdf' => '16-05-2023586TEP961122B8ASS0000001126.pdf',
                'xml' => '16-05-2023586TEP961122B8ASS0000001126.xml',
                'factura_id' => 586,
                'created_at' => '2023-05-16 16:26:34',
                'updated_at' => '2023-05-16 16:26:35',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            86 =>
            array(

                'pdf' => '16-05-2023587CRE9510319D3SS0000001128.pdf',
                'xml' => '16-05-2023587CRE9510319D3SS0000001128.xml',
                'factura_id' => 587,
                'created_at' => '2023-05-16 16:37:14',
                'updated_at' => '2023-05-16 16:37:14',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            87 =>
            array(

                'pdf' => '16-05-2023588SNS960412AH4SS0000001130.pdf',
                'xml' => '16-05-2023588SNS960412AH4SS0000001130.xml',
                'factura_id' => 588,
                'created_at' => '2023-05-16 16:40:42',
                'updated_at' => '2023-05-16 16:40:42',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            88 =>
            array(

                'pdf' => '16-05-2023589CSE750917BG3SS0000001131.pdf',
                'xml' => '16-05-2023589CSE750917BG3SS0000001131.xml',
                'factura_id' => 589,
                'created_at' => '2023-05-16 16:46:09',
                'updated_at' => '2023-05-16 16:46:09',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            89 =>
            array(

                'pdf' => '31-05-2023590CFDI_S000000776.pdf',
                'xml' => '31-05-2023590CFDI_S000000776.xml',
                'factura_id' => 590,
                'created_at' => '2023-05-31 12:27:01',
                'updated_at' => '2023-05-31 12:27:01',
                'deleted_at' => null,
                'created_by' => 18,
                'updated_by' => 18,
            ),
            90 =>
            array(

                'pdf' => '20-06-2023591SNS960412AH4SS0000001141.pdf',
                'xml' => '20-06-2023591SNS960412AH4SS0000001141.xml',
                'factura_id' => 591,
                'created_at' => '2023-06-20 13:07:50',
                'updated_at' => '2023-06-20 13:07:50',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            91 =>
            array(

                'pdf' => '20-06-2023592CRE9510319D3SS0000001140.pdf',
                'xml' => '20-06-2023592CRE9510319D3SS0000001140.xml',
                'factura_id' => 592,
                'created_at' => '2023-06-20 15:46:33',
                'updated_at' => '2023-06-20 15:46:33',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            92 =>
            array(

                'pdf' => '20-06-2023593TEP961122B8ASS0000001139.pdf',
                'xml' => '20-06-2023593TEP961122B8ASS0000001139.xml',
                'factura_id' => 593,
                'created_at' => '2023-06-20 15:49:27',
                'updated_at' => '2023-06-20 15:49:27',
                'deleted_at' => null,
                'created_by' => 17,
                'updated_by' => 17,
            ),
            93 =>
            array(

                'pdf' => '11-07-2023594PME380607P35SS0000001119.pdf',
                'xml' => '11-07-2023594PME380607P35SS0000001119.xml',
                'factura_id' => 594,
                'created_at' => '2023-07-11 12:10:05',
                'updated_at' => '2023-07-11 12:10:05',
                'deleted_at' => null,
                'created_by' => 19,
                'updated_by' => 19,
            ),
            94 =>
            array(

                'pdf' => '11-07-2023595PME380607P35SS0000001134.pdf',
                'xml' => '11-07-2023595PME380607P35SS0000001134.xml',
                'factura_id' => 595,
                'created_at' => '2023-07-11 12:11:25',
                'updated_at' => '2023-07-11 12:11:25',
                'deleted_at' => null,
                'created_by' => 19,
                'updated_by' => 19,
            ),
            95 =>
            array(

                'pdf' => '11-07-2023596PME380607P35SS0000001147.pdf',
                'xml' => '11-07-2023596PME380607P35SS0000001147.xml',
                'factura_id' => 596,
                'created_at' => '2023-07-11 12:12:44',
                'updated_at' => '2023-07-11 12:12:44',
                'deleted_at' => null,
                'created_by' => 19,
                'updated_by' => 19,
            ),
            96 =>
            array(

                'pdf' => '11-07-2023597BVM951002LX0SS0000001137.pdf',
                'xml' => '11-07-2023597BVM951002LX0SS0000001137.xml',
                'factura_id' => 597,
                'created_at' => '2023-07-11 12:22:56',
                'updated_at' => '2023-07-11 12:22:56',
                'deleted_at' => null,
                'created_by' => 19,
                'updated_by' => 19,
            ),
            97 =>
            array(

                'pdf' => '11-07-2023598BVM951002LX0SS0000001138.pdf',
                'xml' => '11-07-2023598BVM951002LX0SS0000001138.xml',
                'factura_id' => 598,
                'created_at' => '2023-07-11 12:24:51',
                'updated_at' => '2023-07-11 12:24:52',
                'deleted_at' => null,
                'created_by' => 19,
                'updated_by' => 19,
            ),
            98 =>
            array(

                'pdf' => '11-07-2023599BVM951002LX0SS0000001154.pdf',
                'xml' => '11-07-2023599BVM951002LX0SS0000001154.xml',
                'factura_id' => 599,
                'created_at' => '2023-07-11 12:26:24',
                'updated_at' => '2023-07-11 12:26:24',
                'deleted_at' => null,
                'created_by' => 19,
                'updated_by' => 19,
            ),
            99 =>
            array(

                'pdf' => '11-07-2023600BVM951002LX0SS0000001155.pdf',
                'xml' => '11-07-2023600BVM951002LX0SS0000001155.xml',
                'factura_id' => 600,
                'created_at' => '2023-07-11 12:28:18',
                'updated_at' => '2023-07-11 12:28:18',
                'deleted_at' => null,
                'created_by' => 19,
                'updated_by' => 19,
            ),
        ));
    }
}