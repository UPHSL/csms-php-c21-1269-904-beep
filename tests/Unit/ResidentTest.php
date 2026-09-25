<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Resident;

class ResidentTest extends TestCase
{
    public function test_resident_creation_access_and_status()
    {
        $data = [
            'id' => 1,
            'firstName' => 'Juan',
            'lastName' => 'Dela Cruz',
            'address' => '123 Main St',
            'contactNumber' => '09123456789',
            'email' => 'juan@example.com',
            'status' => 'Active',
        ];

        $resident = new Resident($data);

        $this->assertEquals(1, $resident->id);
        $this->assertEquals('Juan', $resident->firstName);
        $this->assertEquals('Dela Cruz', $resident->lastName);
        $this->assertEquals('123 Main St', $resident->address);
        $this->assertEquals('09123456789', $resident->contactNumber);
        $this->assertEquals('juan@example.com', $resident->email);
        $this->assertEquals('Active', $resident->status);
    }
}