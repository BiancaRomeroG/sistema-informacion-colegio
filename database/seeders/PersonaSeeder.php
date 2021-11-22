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
        $persona->nombre = 'Gabriela';
        $persona->sexo = 'F';
        $persona->ci = 90126157;
        $persona->apellido_pat = 'Ayala';
        $persona->apellido_mat = 'Ayala';
        $persona->fecha_nac = '2009/7/24';
        $persona->email = $persona->nombre.strval(157).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(9);
        $persona->telefono = '70012827';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Kevin';
        $persona->sexo = 'M';
        $persona->ci = 90126168;
        $persona->apellido_pat = 'Ramirez';
        $persona->apellido_mat = 'Rojas';
        $persona->fecha_nac = '2009/2/24';
        $persona->email = $persona->nombre.strval(168).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(9);
        $persona->telefono = '70012839';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Kevin';
        $persona->sexo = 'M';
        $persona->ci = 90126179;
        $persona->apellido_pat = 'Aguilera';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '2009/9/24';
        $persona->email = $persona->nombre.strval(179).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(9);
        $persona->telefono = '70012851';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Carla';
        $persona->sexo = 'F';
        $persona->ci = 90126190;
        $persona->apellido_pat = 'Ribera';
        $persona->apellido_mat = 'Ayala';
        $persona->fecha_nac = '2009/10/24';
        $persona->email = $persona->nombre.strval(190).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(9);
        $persona->telefono = '70012863';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victor';
        $persona->sexo = 'M';
        $persona->ci = 90126201;
        $persona->apellido_pat = 'Flores';
        $persona->apellido_mat = 'Flores';
        $persona->fecha_nac = '2009/1/24';
        $persona->email = $persona->nombre.strval(201).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(9);
        $persona->telefono = '70012875';
        $persona->save();

        //2do grado
        $persona = new Persona();
        $persona->nombre = 'Mariela';
        $persona->sexo = 'F';
        $persona->ci = 90126202;
        $persona->apellido_pat = 'Aguilera';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '2008/8/24';
        $persona->email = $persona->nombre.strval(202).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(8);
        $persona->telefono = '70012927';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Mariela';
        $persona->sexo = 'F';
        $persona->ci = 90126213;
        $persona->apellido_pat = 'Ramirez';
        $persona->apellido_mat = 'Flores';
        $persona->fecha_nac = '2008/6/24';
        $persona->email = $persona->nombre.strval(213).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(8);
        $persona->telefono = '70012939';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Juana';
        $persona->sexo = 'F';
        $persona->ci = 90126224;
        $persona->apellido_pat = 'Ribera';
        $persona->apellido_mat = 'Ramirez';
        $persona->fecha_nac = '2008/7/24';
        $persona->email = $persona->nombre.strval(224).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(8);
        $persona->telefono = '70012951';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Ana Maria';
        $persona->sexo = 'F';
        $persona->ci = 90126235;
        $persona->apellido_pat = 'Vidal';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '2008/11/24';
        $persona->email = $persona->nombre.strval(235).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(8);
        $persona->telefono = '70012963';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Pedro';
        $persona->sexo = 'M';
        $persona->ci = 90126246;
        $persona->apellido_pat = 'Vidal';
        $persona->apellido_mat = 'Ramirez';
        $persona->fecha_nac = '2008/3/24';
        $persona->email = $persona->nombre.strval(246).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(8);
        $persona->telefono = '70012975';
        $persona->save();

        //3er grado
        $persona = new Persona();
        $persona->nombre = 'Juan';
        $persona->sexo = 'M';
        $persona->ci = 90126502;
        $persona->apellido_pat = 'Mejia';
        $persona->apellido_mat = 'Flores';
        $persona->fecha_nac = '2007/8/24';
        $persona->email = $persona->nombre.strval(502).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(7);
        $persona->telefono = '70013027';
        $persona->save();

        $persona = new Persona();
        $persona->nombre = 'Victoria';
        $persona->sexo = 'F';
        $persona->ci = 90126513;
        $persona->apellido_pat = 'Perez';
        $persona->apellido_mat = 'Ayala';
        $persona->fecha_nac = '2007/8/24';
        $persona->email = $persona->nombre.strval(513).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(7);
        $persona->telefono = '70013039';
        $persona->save();

        $persona = new Persona();
        $persona->nombre = 'Kevin';
        $persona->sexo = 'M';
        $persona->ci = 90126524;
        $persona->apellido_pat = 'Ayala';
        $persona->apellido_mat = 'Perez';
        $persona->fecha_nac = '2007/11/24';
        $persona->email = $persona->nombre.strval(524).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(7);
        $persona->telefono = '70013051';
        $persona->save();

        $persona = new Persona();
        $persona->nombre = 'Gabriela';
        $persona->sexo = 'F';
        $persona->ci = 90126535;
        $persona->apellido_pat = 'Aguilera';
        $persona->apellido_mat = 'Ribera';
        $persona->fecha_nac = '2007/2/24';
        $persona->email = $persona->nombre.strval(535).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(7);
        $persona->telefono = '70013063';
        $persona->save();

        $persona = new Persona();
        $persona->nombre = 'Victor';
        $persona->sexo = 'M';
        $persona->ci = 90126546;
        $persona->apellido_pat = 'Mejia';
        $persona->apellido_mat = 'Ramirez';
        $persona->fecha_nac = '2007/12/24';
        $persona->email = $persona->nombre.strval(546).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(7);
        $persona->telefono = '70013075';
        $persona->save();

        //4to grado
        $persona = new Persona();
        $persona->nombre = 'Victor';
        $persona->sexo = 'M';
        $persona->ci = 90126557;
        $persona->apellido_pat = 'Mejia';
        $persona->apellido_mat = 'Cabrera';
        $persona->fecha_nac = '2006/12/24';
        $persona->email = $persona->nombre.strval(557).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(6);
        $persona->telefono = '70013087';
        $persona->save();

        $persona = new Persona();
        $persona->nombre = 'Juan';
        $persona->sexo = 'M';
        $persona->ci = 90126568;
        $persona->apellido_pat = 'Ramirez';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '2006/12/24';
        $persona->email = $persona->nombre.strval(568).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(6);
        $persona->telefono = '70013099';
        $persona->save();

        $persona = new Persona();
        $persona->nombre = 'Mariela';
        $persona->sexo = 'F';
        $persona->ci = 90126579;
        $persona->apellido_pat = 'Perez';
        $persona->apellido_mat = 'Rojas';
        $persona->fecha_nac = '2006/10/24';
        $persona->email = $persona->nombre.strval(579).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(6);
        $persona->telefono = '70013111';
        $persona->save();

        $persona = new Persona();
        $persona->nombre = 'Luis';
        $persona->sexo = 'M';
        $persona->ci = 90126590;
        $persona->apellido_pat = 'Perez';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '2006/12/24';
        $persona->email = $persona->nombre.strval(590).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(6);
        $persona->telefono = '70013123';
        $persona->save();

        $persona = new Persona();
        $persona->nombre = 'Pedro';
        $persona->sexo = 'M';
        $persona->ci = 90126601;
        $persona->apellido_pat = 'Cabrera';
        $persona->apellido_mat = 'Flores';
        $persona->fecha_nac = '2006/6/24';
        $persona->email = $persona->nombre.strval(601).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(6);
        $persona->telefono = '70013135';
        $persona->save();

        //5to grado
        $persona = new Persona();
        $persona->nombre = 'Gabriela';
        $persona->sexo = 'F';
        $persona->ci = 90126612;
        $persona->apellido_pat = 'Aguilera';
        $persona->apellido_mat = 'Ayala';
        $persona->fecha_nac = '2005/10/24';
        $persona->email = $persona->nombre.strval(612).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(5);
        $persona->telefono = '70013147';
        $persona->save();

        $persona = new Persona();
        $persona->nombre = 'Felix';
        $persona->sexo = 'M';
        $persona->ci = 90126623;
        $persona->apellido_pat = 'Aguilera';
        $persona->apellido_mat = 'Perez';
        $persona->fecha_nac = '2005/4/24';
        $persona->email = $persona->nombre.strval(623).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(5);
        $persona->telefono = '70013159';
        $persona->save();

        $persona = new Persona();
        $persona->nombre = 'Pedro';
        $persona->sexo = 'M';
        $persona->ci = 90126634;
        $persona->apellido_pat = 'Cabrera';
        $persona->apellido_mat = 'Perez';
        $persona->fecha_nac = '2005/6/24';
        $persona->email = $persona->nombre.strval(634).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(5);
        $persona->telefono = '70013171';
        $persona->save();

        $persona = new Persona();
        $persona->nombre = 'Juana';
        $persona->sexo = 'F';
        $persona->ci = 90126645;
        $persona->apellido_pat = 'Perez';
        $persona->apellido_mat = 'Cruz';
        $persona->fecha_nac = '2005/6/24';
        $persona->email = $persona->nombre.strval(645).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(5);
        $persona->telefono = '70013183';
        $persona->save();

        $persona = new Persona();
        $persona->nombre = 'Roberto';
        $persona->sexo = 'M';
        $persona->ci = 90126656;
        $persona->apellido_pat = 'Cruz';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '2005/5/24';
        $persona->email = $persona->nombre.strval(656).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(5);
        $persona->telefono = '70013195';
        $persona->save();

        //6to grado
        $persona = new Persona();
        $persona->nombre = 'Juana';
        $persona->sexo = 'F';
        $persona->ci = 90126667;
        $persona->apellido_pat = 'Rojas';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '2004/1/24';
        $persona->email = $persona->nombre.strval(667).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(4);
        $persona->telefono = '70013207';
        $persona->save();

        $persona = new Persona();
        $persona->nombre = 'Mariela';
        $persona->sexo = 'F';
        $persona->ci = 90126678;
        $persona->apellido_pat = 'Cruz';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '2004/9/24';
        $persona->email = $persona->nombre.strval(678).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(4);
        $persona->telefono = '70013219';
        $persona->save();

        $persona = new Persona();
        $persona->nombre = 'Victoria';
        $persona->sexo = 'F';
        $persona->ci = 90126689;
        $persona->apellido_pat = 'Ribera';
        $persona->apellido_mat = 'Perez';
        $persona->fecha_nac = '2004/3/24';
        $persona->email = $persona->nombre.strval(689).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(4);
        $persona->telefono = '70013231';
        $persona->save();

        $persona = new Persona();
        $persona->nombre = 'Victor';
        $persona->sexo = 'M';
        $persona->ci = 90126700;
        $persona->apellido_pat = 'Rojas';
        $persona->apellido_mat = 'Ribera';
        $persona->fecha_nac = '2004/7/24';
        $persona->email = $persona->nombre.strval(700).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(4);
        $persona->telefono = '70013243';
        $persona->save();

        $persona = new Persona();
        $persona->nombre = 'Carla';
        $persona->sexo = 'F';
        $persona->ci = 90126711;
        $persona->apellido_pat = 'Rojas';
        $persona->apellido_mat = 'Ribera';
        $persona->fecha_nac = '2004/5/24';
        $persona->email = $persona->nombre.strval(711).'@gmail.com';
        $persona->direccion = 'Calle#'.strval(4);
        $persona->telefono = '70013255';
        $persona->save();

        //persona seeder
        $persona = new Persona();
        $persona->nombre = 'Gabriela';
        $persona->sexo = 'F';
        $persona->ci = 46322591;
        $persona->apellido_pat = 'Ayala';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '1985/8/05';
        $persona->email = $persona->nombre.strval(591).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(85);
        $persona->telefono = '72112295';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Gabriel';
        $persona->sexo = 'M';
        $persona->ci = 46322602;
        $persona->apellido_pat = 'Mejia';
        $persona->apellido_mat = 'Ribera';
        $persona->fecha_nac = '1985/11/05';
        $persona->email = $persona->nombre.strval(602).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(85);
        $persona->telefono = '72112307';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Kevin';
        $persona->sexo = 'M';
        $persona->ci = 46322613;
        $persona->apellido_pat = 'Cruz';
        $persona->apellido_mat = 'Ramirez';
        $persona->fecha_nac = '1995/9/05';
        $persona->email = $persona->nombre.strval(613).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(95);
        $persona->telefono = '72112319';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victoria';
        $persona->sexo = 'F';
        $persona->ci = 46322624;
        $persona->apellido_pat = 'Ramirez';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '1983/5/05';
        $persona->email = $persona->nombre.strval(624).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(83);
        $persona->telefono = '72112331';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Juan';
        $persona->sexo = 'M';
        $persona->ci = 46322635;
        $persona->apellido_pat = 'Ribera';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '1993/6/05';
        $persona->email = $persona->nombre.strval(635).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(93);
        $persona->telefono = '72112343';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Kevin';
        $persona->sexo = 'M';
        $persona->ci = 46322646;
        $persona->apellido_pat = 'Flores';
        $persona->apellido_mat = 'Ayala';
        $persona->fecha_nac = '1994/4/05';
        $persona->email = $persona->nombre.strval(646).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(94);
        $persona->telefono = '72112355';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Pedro';
        $persona->sexo = 'M';
        $persona->ci = 46322657;
        $persona->apellido_pat = 'Cruz';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '1994/12/05';
        $persona->email = $persona->nombre.strval(657).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(94);
        $persona->telefono = '72112367';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victoria';
        $persona->sexo = 'F';
        $persona->ci = 46322668;
        $persona->apellido_pat = 'Aguilera';
        $persona->apellido_mat = 'Ramirez';
        $persona->fecha_nac = '1994/3/05';
        $persona->email = $persona->nombre.strval(668).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(94);
        $persona->telefono = '72112379';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Andrea';
        $persona->sexo = 'F';
        $persona->ci = 46322679;
        $persona->apellido_pat = 'Flores';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '1990/4/05';
        $persona->email = $persona->nombre.strval(679).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(90);
        $persona->telefono = '72112391';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Juana';
        $persona->sexo = 'F';
        $persona->ci = 46322690;
        $persona->apellido_pat = 'Rojas';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '1991/3/05';
        $persona->email = $persona->nombre.strval(690).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(91);
        $persona->telefono = '72112403';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Ana Maria';
        $persona->sexo = 'F';
        $persona->ci = 46322701;
        $persona->apellido_pat = 'Ribera';
        $persona->apellido_mat = 'Perez';
        $persona->fecha_nac = '1980/11/05';
        $persona->email = $persona->nombre.strval(701).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(80);
        $persona->telefono = '72112415';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victor';
        $persona->sexo = 'M';
        $persona->ci = 46322712;
        $persona->apellido_pat = 'Ribera';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '1980/6/05';
        $persona->email = $persona->nombre.strval(712).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(80);
        $persona->telefono = '72112427';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Mariela';
        $persona->sexo = 'F';
        $persona->ci = 46322723;
        $persona->apellido_pat = 'Aguilera';
        $persona->apellido_mat = 'Perez';
        $persona->fecha_nac = '1984/1/05';
        $persona->email = $persona->nombre.strval(723).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(84);
        $persona->telefono = '72112439';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Kevin';
        $persona->sexo = 'M';
        $persona->ci = 46322734;
        $persona->apellido_pat = 'Ribera';
        $persona->apellido_mat = 'Cabrera';
        $persona->fecha_nac = '1993/9/05';
        $persona->email = $persona->nombre.strval(734).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(93);
        $persona->telefono = '72112451';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Gabriel';
        $persona->sexo = 'M';
        $persona->ci = 46322745;
        $persona->apellido_pat = 'Flores';
        $persona->apellido_mat = 'Perez';
        $persona->fecha_nac = '1986/10/05';
        $persona->email = $persona->nombre.strval(745).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(86);
        $persona->telefono = '72112463';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Carla';
        $persona->sexo = 'F';
        $persona->ci = 46322756;
        $persona->apellido_pat = 'Ramirez';
        $persona->apellido_mat = 'Flores';
        $persona->fecha_nac = '1984/8/05';
        $persona->email = $persona->nombre.strval(756).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(84);
        $persona->telefono = '72112475';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Roberto';
        $persona->sexo = 'M';
        $persona->ci = 46322767;
        $persona->apellido_pat = 'Cruz';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '1988/2/05';
        $persona->email = $persona->nombre.strval(767).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(88);
        $persona->telefono = '72112487';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Pedro';
        $persona->sexo = 'M';
        $persona->ci = 46322778;
        $persona->apellido_pat = 'Cruz';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '1985/10/05';
        $persona->email = $persona->nombre.strval(778).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(85);
        $persona->telefono = '72112499';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Carla';
        $persona->sexo = 'F';
        $persona->ci = 46322789;
        $persona->apellido_pat = 'Ayala';
        $persona->apellido_mat = 'Flores';
        $persona->fecha_nac = '1995/9/05';
        $persona->email = $persona->nombre.strval(789).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(95);
        $persona->telefono = '72112511';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Luis';
        $persona->sexo = 'M';
        $persona->ci = 46322800;
        $persona->apellido_pat = 'Rojas';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '1990/4/05';
        $persona->email = $persona->nombre.strval(800).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(90);
        $persona->telefono = '72112523';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Pedro';
        $persona->sexo = 'M';
        $persona->ci = 46322811;
        $persona->apellido_pat = 'Flores';
        $persona->apellido_mat = 'Perez';
        $persona->fecha_nac = '1983/9/05';
        $persona->email = $persona->nombre.strval(811).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(83);
        $persona->telefono = '72112535';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Luis';
        $persona->sexo = 'M';
        $persona->ci = 46322822;
        $persona->apellido_pat = 'Cabrera';
        $persona->apellido_mat = 'Ayala';
        $persona->fecha_nac = '1995/12/05';
        $persona->email = $persona->nombre.strval(822).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(95);
        $persona->telefono = '72112547';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Pedro';
        $persona->sexo = 'M';
        $persona->ci = 46322833;
        $persona->apellido_pat = 'Cabrera';
        $persona->apellido_mat = 'Cruz';
        $persona->fecha_nac = '1987/8/05';
        $persona->email = $persona->nombre.strval(833).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(87);
        $persona->telefono = '72112559';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Mariela';
        $persona->sexo = 'F';
        $persona->ci = 46322844;
        $persona->apellido_pat = 'Ribera';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '1980/7/05';
        $persona->email = $persona->nombre.strval(844).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(80);
        $persona->telefono = '72112571';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Juan';
        $persona->sexo = 'M';
        $persona->ci = 46322855;
        $persona->apellido_pat = 'Cabrera';
        $persona->apellido_mat = 'Cruz';
        $persona->fecha_nac = '1989/8/05';
        $persona->email = $persona->nombre.strval(855).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(89);
        $persona->telefono = '72112583';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Juana';
        $persona->sexo = 'F';
        $persona->ci = 46322866;
        $persona->apellido_pat = 'Ramirez';
        $persona->apellido_mat = 'Vidal';
        $persona->fecha_nac = '1989/11/05';
        $persona->email = $persona->nombre.strval(866).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(89);
        $persona->telefono = '72112595';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Kevin';
        $persona->sexo = 'M';
        $persona->ci = 46322877;
        $persona->apellido_pat = 'Mejia';
        $persona->apellido_mat = 'Vidal';
        $persona->fecha_nac = '1984/11/05';
        $persona->email = $persona->nombre.strval(877).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(84);
        $persona->telefono = '72112607';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victor';
        $persona->sexo = 'M';
        $persona->ci = 46322888;
        $persona->apellido_pat = 'Ramirez';
        $persona->apellido_mat = 'Cabrera';
        $persona->fecha_nac = '1994/8/05';
        $persona->email = $persona->nombre.strval(888).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(94);
        $persona->telefono = '72112619';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Carla';
        $persona->sexo = 'F';
        $persona->ci = 46322899;
        $persona->apellido_pat = 'Ribera';
        $persona->apellido_mat = 'Vidal';
        $persona->fecha_nac = '1983/10/05';
        $persona->email = $persona->nombre.strval(899).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(83);
        $persona->telefono = '72112631';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Juan';
        $persona->sexo = 'M';
        $persona->ci = 46322910;
        $persona->apellido_pat = 'Aguilera';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '1980/5/05';
        $persona->email = $persona->nombre.strval(910).'tutor@gmail.com';
        $persona->direccion = 'Calle#'.strval(80);
        $persona->telefono = '72112643';
        $persona->save();

        //profesores
        $persona = new Persona();
        $persona->nombre = 'Victoria';
        $persona->sexo = 'F';
        $persona->ci = 46322591;
        $persona->apellido_pat = 'Cruz';
        $persona->apellido_mat = 'Ribera';
        $persona->fecha_nac = '1987/3/05';
        $persona->email = $persona->nombre.strval(591).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(87);
        $persona->telefono = '72112295';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Felix';
        $persona->sexo = 'M';
        $persona->ci = 46322602;
        $persona->apellido_pat = 'Mejia';
        $persona->apellido_mat = 'Perez';
        $persona->fecha_nac = '1981/1/05';
        $persona->email = $persona->nombre.strval(602).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(81);
        $persona->telefono = '72112307';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Juana';
        $persona->sexo = 'F';
        $persona->ci = 46322613;
        $persona->apellido_pat = 'Mejia';
        $persona->apellido_mat = 'Perez';
        $persona->fecha_nac = '1991/9/05';
        $persona->email = $persona->nombre.strval(613).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(91);
        $persona->telefono = '72112319';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Victor';
        $persona->sexo = 'M';
        $persona->ci = 46322624;
        $persona->apellido_pat = 'Mejia';
        $persona->apellido_mat = 'Mejia';
        $persona->fecha_nac = '1980/10/05';
        $persona->email = $persona->nombre.strval(624).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(80);
        $persona->telefono = '72112331';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Andrea';
        $persona->sexo = 'F';
        $persona->ci = 46322635;
        $persona->apellido_pat = 'Perez';
        $persona->apellido_mat = 'Ayala';
        $persona->fecha_nac = '1985/5/05';
        $persona->email = $persona->nombre.strval(635).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(85);
        $persona->telefono = '72112343';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Andrea';
        $persona->sexo = 'F';
        $persona->ci = 46322646;
        $persona->apellido_pat = 'Aguilera';
        $persona->apellido_mat = 'Cabrera';
        $persona->fecha_nac = '1992/3/05';
        $persona->email = $persona->nombre.strval(646).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(92);
        $persona->telefono = '72112355';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Felix';
        $persona->sexo = 'M';
        $persona->ci = 46322657;
        $persona->apellido_pat = 'Mejia';
        $persona->apellido_mat = 'Flores';
        $persona->fecha_nac = '1995/6/05';
        $persona->email = $persona->nombre.strval(657).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(95);
        $persona->telefono = '72112367';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Carla';
        $persona->sexo = 'F';
        $persona->ci = 46322668;
        $persona->apellido_pat = 'Cabrera';
        $persona->apellido_mat = 'Cabrera';
        $persona->fecha_nac = '1981/7/05';
        $persona->email = $persona->nombre.strval(668).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(81);
        $persona->telefono = '72112379';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Andrea';
        $persona->sexo = 'F';
        $persona->ci = 46322679;
        $persona->apellido_pat = 'Cruz';
        $persona->apellido_mat = 'Aguilera';
        $persona->fecha_nac = '1981/5/05';
        $persona->email = $persona->nombre.strval(679).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(81);
        $persona->telefono = '72112391';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Juan';
        $persona->sexo = 'M';
        $persona->ci = 46322690;
        $persona->apellido_pat = 'Rojas';
        $persona->apellido_mat = 'Cabrera';
        $persona->fecha_nac = '1980/7/05';
        $persona->email = $persona->nombre.strval(690).'profesor@gmail.com';
        $persona->direccion = 'Calle#'.strval(80);
        $persona->telefono = '72112403';
        $persona->save();

        //admin
        $persona = new Persona();
        $persona->nombre = 'Kevin';
        $persona->sexo = 'M';
        $persona->ci = 46322591;
        $persona->apellido_pat = 'Mejia';
        $persona->apellido_mat = 'Perez';
        $persona->fecha_nac = '1990/1/05';
        $persona->email = $persona->nombre.strval(591).'director@gmail.com';
        $persona->direccion = 'Calle#'.strval(90);
        $persona->telefono = '72112295';
        $persona->save();
        
        $persona = new Persona();
        $persona->nombre = 'Ana Maria';
        $persona->sexo = 'F';
        $persona->ci = 46322602;
        $persona->apellido_pat = 'Rojas';
        $persona->apellido_mat = 'Vidal';
        $persona->fecha_nac = '1994/3/05';
        $persona->email = $persona->nombre.strval(602).'secretaria@gmail.com';
        $persona->direccion = 'Calle#'.strval(94);
        $persona->telefono = '72112307';
        $persona->save();
        
        
    }
}
