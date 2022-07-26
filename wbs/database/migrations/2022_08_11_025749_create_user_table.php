    <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $primaryKey = 'nik';

        Schema::create('user', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('nama');
            $table->string('nik')->unique();
            $table->string('email');
            $table->string('telp');
            $table->string('alamat');
            $table->string('asal');
            $table->string('ktp');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
