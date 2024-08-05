<?php
declare(strict_types=1);

namespace Lcobucci\JWT\Ecdsa;

use Lcobucci\JWT\Signer;
use Lcobucci\JWT\Signer\Ecdsa\Sha384;
use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\SignerBench;
use PhpBench\Benchmark\Metadata\Annotations\Groups;

/** @Groups({"ECDSA"}) */
final class Sha384Bench extends SignerBench
{
    protected function signer(): Signer
    {
        return Sha384::create();
    }

    protected function signingKey(): Key
    {
        return Key\InMemory::file(__DIR__ . '/private-384.key');
    }

    protected function verificationKey(): Key
    {
        return Key\InMemory::file(__DIR__ . '/public-384.key');
    }
}
