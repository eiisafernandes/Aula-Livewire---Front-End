<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /* 
            EXERCÍCIOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO:

            Crie uma classe Usuario contendo os campos: nome, email, celular, estado civil, data_nascimento, cidade, estado, endereco, cep, e password.
            Defina o tamanho ideal para cada campo na migration.
            Crie 400 registros no seeder.
            Utiliza ao menos 6 estados e 10 cidades diferentes nos seeders.
            Distribua datas de nascimento entre os 12 meses e considere os anos entre 1990 e 2005.

        */

        $estado = collect(['SP', 'RJ', 'MT', 'RS', 'ES', 'MG']);
        $cidade = collect(['Presidente Epitácio', 'Nova Iguaçu', 'Florianópolis', 'Niterói', 'Duque de Caxias', 'Rio de Janeiro', 'São Paulo', 'Caiuá', 'Presidente Prudente', 'Santo Anastácio']);
        $estado_civil = collect(['Casado', 'Viúvo', 'Solteiro']);

        for ($i = 0; $i < 400; $i++) {
            Usuario::create([
                'nome' => 'pessoa' . $i,
                'email' => 'pessoa' . $i . '@gmail.com',
                'celular' => '18996962911',
                'estado_civil' => $estado_civil->random(),
                'data_nascimento' => rand(1990, 2005) . '-' . rand(1, 12) . '-' . rand(1, 28),
                'cidade' => $cidade->random(),
                'estado' => $estado->random(),
                'endereco' => 'Rua Fernando Costa',
                'cep' => '19470000',
                'password' => '1234'
            ]);

            /* OUTRA FORMA DE FAZER A DATA DE NASCIMENTO ENTRE 1990 E 2005
            
            $ano = rand(1990,2005);
            $mes = rand(1,12);
            $dia = rand(1,28);

            FICARIA ASSIM:
            'data_nascimento' => $ano . '-' . $mes . '-' . $dia,          
            
            */
            
        }
    }
}
