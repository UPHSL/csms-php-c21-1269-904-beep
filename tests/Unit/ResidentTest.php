public function up(): void
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('contact_number');
            $table->string('email');
            $table->string('status')->default('Active');
            $table->timestamps();
        });
    }