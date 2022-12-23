<?php

namespace App\Services;

class newsletter
{
    public function subscribe(string $email, string $phone = null)
    {
        $list ??= config('services.sender.lists.subscribers');
        $list = ["$list"];

        /**
         * @var phone -> reformat to +98xxx xxx xxxx
         */
        if (empty($phone)) {
            $json = [
                "email" => $email,
                "groups" => $list
            ];
        } else {
            $phone = $phone;
            $phone[0] = 8;
            $phone = '+9' . $phone;
            $json = [
                "email" => $email,
                "phone" => $phone,
                "groups" => $list
            ];
        }

        return $this->client($json);
    }

    protected function client($json)
    {
         return (new \GuzzleHttp\Client())->post(
            'https://api.sender.net/v2/subscribers',
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . config('services.sender.key'),
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json'
                ],
                'json' => $json
            ]
        );
    }
}
