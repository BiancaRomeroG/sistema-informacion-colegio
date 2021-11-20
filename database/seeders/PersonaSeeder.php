<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1er grado
        $persona = new Persona();
        $persona->nombre = 'Carla';
        $persona->sexo = 'F';
        $persona->ci = 90125921;
        $persona->apellido_pat = 'Mejia';
        $persona->apellido_mat = 'Cabrera';
        $persona->fecha_nac = '2009/7/24';
        $persona->email = $persona->nombre.strval(921).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(9);
        $persona->telefono = '70012573';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Andrea';
        $persona->sexo = 'F';
        $persona->ci = 90125932;
        $persona->apellido_pat = 'Mejia';
        $persona->apellido_mat = 'Ayala';
        $persona->fecha_nac = '2009/10/24';
        $persona->email = $persona->nombre.strval(932).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(9);
        $persona->telefono = '70012585';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victoria';
        $persona->sexo = 'F';
        $persona->ci = 90125943;
        $persona->apellido_pat = 'Rojas';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '2009/2/24';
        $persona->email = $persona->nombre.strval(943).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(9);
        $persona->telefono = '70012597';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Juan';
        $persona->sexo = 'M';
        $persona->ci = 90125954;
        $persona->apellido_pat = 'Ribera';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '2009/6/24';
        $persona->email = $persona->nombre.strval(954).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(9);
        $persona->telefono = '70012609';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Andrea';
        $persona->sexo = 'F';
        $persona->ci = 90125965;
        $persona->apellido_pat = 'Cruz';
        $persona->apellido_mat = 'Rojas';
        $persona->fecha_nac = '2009/10/24';
        $persona->email = $persona->nombre.strval(965).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(9);
        $persona->telefono = '70012621';
        $persona->save();
        
        //2do grado
        $persona = new Persona();
        $persona->nombre = 'Juan';
        $persona->sexo = 'M';
        $persona->ci = 90125968;
        $persona->apellido_pat = 'Cabrera';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '2008/12/24';
        $persona->email = $persona->nombre.strval(968).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(8);
        $persona->telefono = '70012625';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Gabriela';
        $persona->sexo = 'F';
        $persona->ci = 90125979;
        $persona->apellido_pat = 'Ayala';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '2008/12/24';
        $persona->email = $persona->nombre.strval(979).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(8);
        $persona->telefono = '70012637';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victoria';
        $persona->sexo = 'F';
        $persona->ci = 90125990;
        $persona->apellido_pat = 'Perez';
        $persona->apellido_mat = 'Cabrera';
        $persona->fecha_nac = '2008/3/24';
        $persona->email = $persona->nombre.strval(990).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(8);
        $persona->telefono = '70012649';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Mariela';
        $persona->sexo = 'F';
        $persona->ci = 90126001;
        $persona->apellido_pat = 'Vidal';
        $persona->apellido_mat = 'Flores';
        $persona->fecha_nac = '2008/9/24';
        $persona->email = $persona->nombre.strval(1).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(8);
        $persona->telefono = '70012661';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Mariela';
        $persona->sexo = 'F';
        $persona->ci = 90126012;
        $persona->apellido_pat = 'Cabrera';
        $persona->apellido_mat = 'Perez';
        $persona->fecha_nac = '2008/12/24';
        $persona->email = $persona->nombre.strval(12).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(8);
        $persona->telefono = '70012673';
        $persona->save();

        //3er grado 
        $persona = new Persona();
        $persona->nombre = 'Felix';
        $persona->sexo = 'M';
        $persona->ci = 90126015;
        $persona->apellido_pat = 'Rojas';
        $persona->apellido_mat = 'Rojas';
        $persona->fecha_nac = '2007/8/24';
        $persona->email = $persona->nombre.strval(15).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(7);
        $persona->telefono = '70012675';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Carla';
        $persona->sexo = 'F';
        $persona->ci = 90126026;
        $persona->apellido_pat = 'Mejia';
        $persona->apellido_mat = 'Perez';
        $persona->fecha_nac = '2007/8/24';
        $persona->email = $persona->nombre.strval(26).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(7);
        $persona->telefono = '70012687';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Felix';
        $persona->sexo = 'M';
        $persona->ci = 90126037;
        $persona->apellido_pat = 'Ribera';
        $persona->apellido_mat = 'Ayala';
        $persona->fecha_nac = '2007/1/24';
        $persona->email = $persona->nombre.strval(37).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(7);
        $persona->telefono = '70012699';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Juan';
        $persona->sexo = 'M';
        $persona->ci = 90126048;
        $persona->apellido_pat = 'Ribera';
        $persona->apellido_mat = 'Perez';
        $persona->fecha_nac = '2007/8/24';
        $persona->email = $persona->nombre.strval(48).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(7);
        $persona->telefono = '70012711';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Luis';
        $persona->sexo = 'M';
        $persona->ci = 90126059;
        $persona->apellido_pat = 'Mejia';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '2007/6/24';
        $persona->email = $persona->nombre.strval(59).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(7);
        $persona->telefono = '70012723';
        $persona->save();
        
        //4to grado
        $persona = new Persona();
        $persona->nombre = 'Victor';
        $persona->sexo = 'M';
        $persona->ci = 90126060;
        $persona->apellido_pat = 'Perez';
        $persona->apellido_mat = 'Cabrera';
        $persona->fecha_nac = '2006/6/24';
        $persona->email = $persona->nombre.strval(60).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(6);
        $persona->telefono = '70012724';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Juan';
        $persona->sexo = 'M';
        $persona->ci = 90126071;
        $persona->apellido_pat = 'Vidal';
        $persona->apellido_mat = 'Ramirez';
        $persona->fecha_nac = '2006/7/24';
        $persona->email = $persona->nombre.strval(71).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(6);
        $persona->telefono = '70012736';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Ana Maria';
        $persona->sexo = 'F';
        $persona->ci = 90126082;
        $persona->apellido_pat = 'Ramirez';
        $persona->apellido_mat = 'Vidal';
        $persona->fecha_nac = '2006/7/24';
        $persona->email = $persona->nombre.strval(82).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(6);
        $persona->telefono = '70012748';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Pedro';
        $persona->sexo = 'M';
        $persona->ci = 90126093;
        $persona->apellido_pat = 'Ramirez';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '2006/3/24';
        $persona->email = $persona->nombre.strval(93).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(6);
        $persona->telefono = '70012760';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Roberto';
        $persona->sexo = 'M';
        $persona->ci = 90126104;
        $persona->apellido_pat = 'Vidal';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '2006/8/24';
        $persona->email = $persona->nombre.strval(104).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(6);
        $persona->telefono = '70012772';
        $persona->save();

        //5to grado
        $persona = new Persona();
        $persona->nombre = 'Juan';
        $persona->sexo = 'M';
        $persona->ci = 90126106;
        $persona->apellido_pat = 'Cruz';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '2005/6/24';
        $persona->email = $persona->nombre.strval(106).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(5);
        $persona->telefono = '70012773';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Juana';
        $persona->sexo = 'F';
        $persona->ci = 90126117;
        $persona->apellido_pat = 'Cabrera';
        $persona->apellido_mat = 'Ramirez';
        $persona->fecha_nac = '2005/5/24';
        $persona->email = $persona->nombre.strval(117).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(5);
        $persona->telefono = '70012785';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Juana';
        $persona->sexo = 'F';
        $persona->ci = 90126128;
        $persona->apellido_pat = 'Mejia';
        $persona->apellido_mat = 'Ramirez';
        $persona->fecha_nac = '2005/3/24';
        $persona->email = $persona->nombre.strval(128).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(5);
        $persona->telefono = '70012797';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Ana Maria';
        $persona->sexo = 'F';
        $persona->ci = 90126139;
        $persona->apellido_pat = 'Ramirez';
        $persona->apellido_mat = 'Ramirez';
        $persona->fecha_nac = '2005/4/24';
        $persona->email = $persona->nombre.strval(139).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(5);
        $persona->telefono = '70012809';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Ana Maria';
        $persona->sexo = 'F';
        $persona->ci = 90126150;
        $persona->apellido_pat = 'Rojas';
        $persona->apellido_mat = 'Ribera';
        $persona->fecha_nac = '2005/2/24';
        $persona->email = $persona->nombre.strval(150).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(5);
        $persona->telefono = '70012821';
        $persona->save();

        //6to grado
        $persona = new Persona();
        $persona->nombre = 'Victor';
        $persona->sexo = 'M';
        $persona->ci = 90126157;
        $persona->apellido_pat = 'Mejia';
        $persona->apellido_mat = 'Ribera';
        $persona->fecha_nac = '2004/7/24';
        $persona->email = $persona->nombre.strval(157).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(4);
        $persona->telefono = '70012827';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Roberto';
        $persona->sexo = 'M';
        $persona->ci = 90126168;
        $persona->apellido_pat = 'Aguilera';
        $persona->apellido_mat = 'Vidal';
        $persona->fecha_nac = '2004/2/24';
        $persona->email = $persona->nombre.strval(168).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(4);
        $persona->telefono = '70012839';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Juana';
        $persona->sexo = 'F';
        $persona->ci = 90126179;
        $persona->apellido_pat = 'Vidal';
        $persona->apellido_mat = 'Ribera';
        $persona->fecha_nac = '2004/8/24';
        $persona->email = $persona->nombre.strval(179).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(4);
        $persona->telefono = '70012851';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Pedro';
        $persona->sexo = 'M';
        $persona->ci = 90126190;
        $persona->apellido_pat = 'Ayala';
        $persona->apellido_mat = 'Vidal';
        $persona->fecha_nac = '2004/12/24';
        $persona->email = $persona->nombre.strval(190).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(4);
        $persona->telefono = '70012863';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Gabriela';
        $persona->sexo = 'F';
        $persona->ci = 90126201;
        $persona->apellido_pat = 'Cruz';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '2004/8/24';
        $persona->email = $persona->nombre.strval(201).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(4);
        $persona->telefono = '70012875';
        $persona->save();


        //30 tutores -- 1 x cada alumno
        $persona = new Persona();
        $persona->nombre = 'Ana Maria';
        $persona->sexo = 'F';
        $persona->ci = 56326919;
        $persona->apellido_pat = 'Cabrera';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '1990/3/05';
        $persona->email = $persona->nombre.strval(919).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(90);
        $persona->telefono = '71612827';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Pedro';
        $persona->sexo = 'M';
        $persona->ci = 56326930;
        $persona->apellido_pat = 'Rojas';
        $persona->apellido_mat = 'Cabrera';
        $persona->fecha_nac = '1995/5/05';
        $persona->email = $persona->nombre.strval(930).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(95);
        $persona->telefono = '71612839';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victor';
        $persona->sexo = 'M';
        $persona->ci = 56326941;
        $persona->apellido_pat = 'Ayala';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '1989/10/05';
        $persona->email = $persona->nombre.strval(941).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(89);
        $persona->telefono = '71612851';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Mariela';
        $persona->sexo = 'F';
        $persona->ci = 56326952;
        $persona->apellido_pat = 'Cruz';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '1991/3/05';
        $persona->email = $persona->nombre.strval(952).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(91);
        $persona->telefono = '71612863';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Andrea';
        $persona->sexo = 'F';
        $persona->ci = 56326963;
        $persona->apellido_pat = 'Flores';
        $persona->apellido_mat = 'Ribera';
        $persona->fecha_nac = '1990/2/05';
        $persona->email = $persona->nombre.strval(963).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(90);
        $persona->telefono = '71612875';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victor';
        $persona->sexo = 'M';
        $persona->ci = 56326974;
        $persona->apellido_pat = 'Mejia';
        $persona->apellido_mat = 'Rojas';
        $persona->fecha_nac = '1986/2/05';
        $persona->email = $persona->nombre.strval(974).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(86);
        $persona->telefono = '71612887';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victor';
        $persona->sexo = 'M';
        $persona->ci = 56326985;
        $persona->apellido_pat = 'Cabrera';
        $persona->apellido_mat = 'Cruz';
        $persona->fecha_nac = '1987/3/05';
        $persona->email = $persona->nombre.strval(985).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(87);
        $persona->telefono = '71612899';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victor';
        $persona->sexo = 'M';
        $persona->ci = 56326996;
        $persona->apellido_pat = 'Perez';
        $persona->apellido_mat = 'Rojas';
        $persona->fecha_nac = '1988/8/05';
        $persona->email = $persona->nombre.strval(996).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(88);
        $persona->telefono = '71612911';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Carla';
        $persona->sexo = 'F';
        $persona->ci = 56327007;
        $persona->apellido_pat = 'Perez';
        $persona->apellido_mat = 'Cruz';
        $persona->fecha_nac = '1986/10/05';
        $persona->email = $persona->nombre.strval(7).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(86);
        $persona->telefono = '71612923';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Gabriela';
        $persona->sexo = 'F';
        $persona->ci = 56327018;
        $persona->apellido_pat = 'Ayala';
        $persona->apellido_mat = 'Perez';
        $persona->fecha_nac = '1987/4/05';
        $persona->email = $persona->nombre.strval(18).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(87);
        $persona->telefono = '71612935';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Gabriel';
        $persona->sexo = 'M';
        $persona->ci = 56327029;
        $persona->apellido_pat = 'Ribera';
        $persona->apellido_mat = 'Ramirez';
        $persona->fecha_nac = '1995/4/05';
        $persona->email = $persona->nombre.strval(29).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(95);
        $persona->telefono = '71612947';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Andrea';
        $persona->sexo = 'F';
        $persona->ci = 56327040;
        $persona->apellido_pat = 'Cruz';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '1993/6/05';
        $persona->email = $persona->nombre.strval(40).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(93);
        $persona->telefono = '71612959';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Felix';
        $persona->sexo = 'M';
        $persona->ci = 56327051;
        $persona->apellido_pat = 'Ribera';
        $persona->apellido_mat = 'Flores';
        $persona->fecha_nac = '1989/3/05';
        $persona->email = $persona->nombre.strval(51).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(89);
        $persona->telefono = '71612971';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victor';
        $persona->sexo = 'M';
        $persona->ci = 56327062;
        $persona->apellido_pat = 'Ribera';
        $persona->apellido_mat = 'Rojas';
        $persona->fecha_nac = '1988/3/05';
        $persona->email = $persona->nombre.strval(62).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(88);
        $persona->telefono = '71612983';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Felix';
        $persona->sexo = 'M';
        $persona->ci = 56327073;
        $persona->apellido_pat = 'Perez';
        $persona->apellido_mat = 'Perez';
        $persona->fecha_nac = '1992/3/05';
        $persona->email = $persona->nombre.strval(73).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(92);
        $persona->telefono = '71612995';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Andrea';
        $persona->sexo = 'F';
        $persona->ci = 56327084;
        $persona->apellido_pat = 'Flores';
        $persona->apellido_mat = 'Rojas';
        $persona->fecha_nac = '1994/6/05';
        $persona->email = $persona->nombre.strval(84).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(94);
        $persona->telefono = '71613007';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victoria';
        $persona->sexo = 'F';
        $persona->ci = 56327095;
        $persona->apellido_pat = 'Cruz';
        $persona->apellido_mat = 'Flores';
        $persona->fecha_nac = '1986/3/05';
        $persona->email = $persona->nombre.strval(95).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(86);
        $persona->telefono = '71613019';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Gabriel';
        $persona->sexo = 'M';
        $persona->ci = 56327106;
        $persona->apellido_pat = 'Vidal';
        $persona->apellido_mat = 'Vidal';
        $persona->fecha_nac = '1987/1/05';
        $persona->email = $persona->nombre.strval(106).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(87);
        $persona->telefono = '71613031';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Ana Maria';
        $persona->sexo = 'F';
        $persona->ci = 56327117;
        $persona->apellido_pat = 'Rojas';
        $persona->apellido_mat = 'Cabrera';
        $persona->fecha_nac = '1994/11/05';
        $persona->email = $persona->nombre.strval(117).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(94);
        $persona->telefono = '71613043';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Carla';
        $persona->sexo = 'F';
        $persona->ci = 56327128;
        $persona->apellido_pat = 'Ramirez';
        $persona->apellido_mat = 'Cabrera';
        $persona->fecha_nac = '1985/9/05';
        $persona->email = $persona->nombre.strval(128).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(85);
        $persona->telefono = '71613055';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Carla';
        $persona->sexo = 'F';
        $persona->ci = 56327139;
        $persona->apellido_pat = 'Aguilera';
        $persona->apellido_mat = 'Ayala';
        $persona->fecha_nac = '1991/6/05';
        $persona->email = $persona->nombre.strval(139).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(91);
        $persona->telefono = '71613067';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victor';
        $persona->sexo = 'M';
        $persona->ci = 56327150;
        $persona->apellido_pat = 'Perez';
        $persona->apellido_mat = 'Cabrera';
        $persona->fecha_nac = '1995/3/05';
        $persona->email = $persona->nombre.strval(150).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(95);
        $persona->telefono = '71613079';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Gabriela';
        $persona->sexo = 'F';
        $persona->ci = 56327161;
        $persona->apellido_pat = 'Rojas';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '1995/11/05';
        $persona->email = $persona->nombre.strval(161).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(95);
        $persona->telefono = '71613091';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Luis';
        $persona->sexo = 'M';
        $persona->ci = 56327172;
        $persona->apellido_pat = 'Cruz';
        $persona->apellido_mat = 'Rojas';
        $persona->fecha_nac = '1993/1/05';
        $persona->email = $persona->nombre.strval(172).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(93);
        $persona->telefono = '71613103';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Juan';
        $persona->sexo = 'M';
        $persona->ci = 56327183;
        $persona->apellido_pat = 'Ayala';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '1990/1/05';
        $persona->email = $persona->nombre.strval(183).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(90);
        $persona->telefono = '71613115';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Felix';
        $persona->sexo = 'M';
        $persona->ci = 56327194;
        $persona->apellido_pat = 'Perez';
        $persona->apellido_mat = 'Perez';
        $persona->fecha_nac = '1985/7/05';
        $persona->email = $persona->nombre.strval(194).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(85);
        $persona->telefono = '71613127';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victor';
        $persona->sexo = 'M';
        $persona->ci = 56327205;
        $persona->apellido_pat = 'Vidal';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '1987/7/05';
        $persona->email = $persona->nombre.strval(205).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(87);
        $persona->telefono = '71613139';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Juana';
        $persona->sexo = 'F';
        $persona->ci = 56327216;
        $persona->apellido_pat = 'Cabrera';
        $persona->apellido_mat = 'Cruz';
        $persona->fecha_nac = '1993/3/05';
        $persona->email = $persona->nombre.strval(216).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(93);
        $persona->telefono = '71613151';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victoria';
        $persona->sexo = 'F';
        $persona->ci = 56327227;
        $persona->apellido_pat = 'Ayala';
        $persona->apellido_mat = 'Ayala';
        $persona->fecha_nac = '1994/11/05';
        $persona->email = $persona->nombre.strval(227).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(94);
        $persona->telefono = '71613163';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Luis';
        $persona->sexo = 'M';
        $persona->ci = 56327238;
        $persona->apellido_pat = 'Aguilera';
        $persona->apellido_mat = 'Rojas';
        $persona->fecha_nac = '1992/11/05';
        $persona->email = $persona->nombre.strval(238).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(92);
        $persona->telefono = '71613175';
        $persona->save();


        //10 profesores -- 1 x cada materia
        $persona = new Persona();
        $persona->nombre = 'Ana Maria';
        $persona->sexo = 'F';
        $persona->ci = 46322591;
        $persona->apellido_pat = 'Ayala';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '1990/7/05';
        $persona->email = $persona->nombre.strval(591).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(90);
        $persona->telefono = '72112295';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Mariela';
        $persona->sexo = 'F';
        $persona->ci = 46322602;
        $persona->apellido_pat = 'Ribera';
        $persona->apellido_mat = 'Cabrera';
        $persona->fecha_nac = '1992/10/05';
        $persona->email = $persona->nombre.strval(602).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(92);
        $persona->telefono = '72112307';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victor';
        $persona->sexo = 'M';
        $persona->ci = 46322613;
        $persona->apellido_pat = 'Ramirez';
        $persona->apellido_mat = 'Cabrera';
        $persona->fecha_nac = '1985/7/05';
        $persona->email = $persona->nombre.strval(613).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(85);
        $persona->telefono = '72112319';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Ana Maria';
        $persona->sexo = 'F';
        $persona->ci = 46322624;
        $persona->apellido_pat = 'Perez';
        $persona->apellido_mat = 'Rojas';
        $persona->fecha_nac = '1987/6/05';
        $persona->email = $persona->nombre.strval(624).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(87);
        $persona->telefono = '72112331';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Ana Maria';
        $persona->sexo = 'F';
        $persona->ci = 46322635;
        $persona->apellido_pat = 'Flores';
        $persona->apellido_mat = 'Ayala';
        $persona->fecha_nac = '1994/3/05';
        $persona->email = $persona->nombre.strval(635).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(94);
        $persona->telefono = '72112343';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Mariela';
        $persona->sexo = 'F';
        $persona->ci = 46322646;
        $persona->apellido_pat = 'Ayala';
        $persona->apellido_mat = 'Cruz';
        $persona->fecha_nac = '1983/7/05';
        $persona->email = $persona->nombre.strval(646).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(83);
        $persona->telefono = '72112355';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Luis';
        $persona->sexo = 'M';
        $persona->ci = 46322657;
        $persona->apellido_pat = 'Vidal';
        $persona->apellido_mat = 'Rojas';
        $persona->fecha_nac = '1995/7/05';
        $persona->email = $persona->nombre.strval(657).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(95);
        $persona->telefono = '72112367';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victoria';
        $persona->sexo = 'F';
        $persona->ci = 46322668;
        $persona->apellido_pat = 'Aguilera';
        $persona->apellido_mat = 'Vidal';
        $persona->fecha_nac = '1991/8/05';
        $persona->email = $persona->nombre.strval(668).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(91);
        $persona->telefono = '72112379';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Kevin';
        $persona->sexo = 'M';
        $persona->ci = 46322679;
        $persona->apellido_pat = 'Vidal';
        $persona->apellido_mat = 'Cabrera';
        $persona->fecha_nac = '1995/5/05';
        $persona->email = $persona->nombre.strval(679).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(95);
        $persona->telefono = '72112391';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Juan';
        $persona->sexo = 'M';
        $persona->ci = 46322690;
        $persona->apellido_pat = 'Aguilera';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '1981/10/05';
        $persona->email = $persona->nombre.strval(690).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(81);
        $persona->telefono = '72112403';
        $persona->save();

        //2 administrativos -- director/secretaria

        $persona = new Persona();
        $persona->nombre = 'Juan Carlos';
        $persona->sexo = 'M';
        $persona->ci = 32592510;
        $persona->apellido_pat = 'Perez';
        $persona->apellido_mat = 'Cabrera';
        $persona->fecha_nac = '1980/5/05';
        $persona->email = $persona->nombre.strval(679).'director@gmail.com';
        $persona->direccion = 'Calle#'.strval(5);
        $persona->telefono = '72100021';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Patricia';
        $persona->sexo = 'F';
        $persona->ci = 39102852;
        $persona->apellido_pat = 'Aguilera';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '1983/10/05';
        $persona->email = $persona->nombre.strval(690).'secretaria@gmail.com';
        $persona->direccion = 'Calle#'.strval(81);
        $persona->telefono = '72138512';
        $persona->save();
    }
}
