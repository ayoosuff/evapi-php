<?php
/**
 * EmailApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ExaVault API
 *
 * See our API reference documentation at https://www.exavault.com/developer/api-docs/
 *
 * OpenAPI spec version: 2.0
 * Contact: support@exavault.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * EmailApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation sendReferralEmail
     *
     * Send referral email to a given address
     *
     * @param  string $ev_api_key API Key required to make the API call. (required)
     * @param  string $ev_access_token Access token required to make the API call. (required)
     * @param  \Swagger\Client\Model\Body15 $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\EmptyResponse
     */
    public function sendReferralEmail($ev_api_key, $ev_access_token, $body = null)
    {
        list($response) = $this->sendReferralEmailWithHttpInfo($ev_api_key, $ev_access_token, $body);
        return $response;
    }

    /**
     * Operation sendReferralEmailWithHttpInfo
     *
     * Send referral email to a given address
     *
     * @param  string $ev_api_key API Key required to make the API call. (required)
     * @param  string $ev_access_token Access token required to make the API call. (required)
     * @param  \Swagger\Client\Model\Body15 $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\EmptyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendReferralEmailWithHttpInfo($ev_api_key, $ev_access_token, $body = null)
    {
        $returnType = '\Swagger\Client\Model\EmptyResponse';
        $request = $this->sendReferralEmailRequest($ev_api_key, $ev_access_token, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\EmptyResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sendReferralEmailAsync
     *
     * Send referral email to a given address
     *
     * @param  string $ev_api_key API Key required to make the API call. (required)
     * @param  string $ev_access_token Access token required to make the API call. (required)
     * @param  \Swagger\Client\Model\Body15 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendReferralEmailAsync($ev_api_key, $ev_access_token, $body = null)
    {
        return $this->sendReferralEmailAsyncWithHttpInfo($ev_api_key, $ev_access_token, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendReferralEmailAsyncWithHttpInfo
     *
     * Send referral email to a given address
     *
     * @param  string $ev_api_key API Key required to make the API call. (required)
     * @param  string $ev_access_token Access token required to make the API call. (required)
     * @param  \Swagger\Client\Model\Body15 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendReferralEmailAsyncWithHttpInfo($ev_api_key, $ev_access_token, $body = null)
    {
        $returnType = '\Swagger\Client\Model\EmptyResponse';
        $request = $this->sendReferralEmailRequest($ev_api_key, $ev_access_token, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sendReferralEmail'
     *
     * @param  string $ev_api_key API Key required to make the API call. (required)
     * @param  string $ev_access_token Access token required to make the API call. (required)
     * @param  \Swagger\Client\Model\Body15 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sendReferralEmailRequest($ev_api_key, $ev_access_token, $body = null)
    {
        // verify the required parameter 'ev_api_key' is set
        if ($ev_api_key === null || (is_array($ev_api_key) && count($ev_api_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ev_api_key when calling sendReferralEmail'
            );
        }
        // verify the required parameter 'ev_access_token' is set
        if ($ev_access_token === null || (is_array($ev_access_token) && count($ev_access_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ev_access_token when calling sendReferralEmail'
            );
        }

        $resourcePath = '/email/referral';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($ev_api_key !== null) {
            $headerParams['ev-api-key'] = ObjectSerializer::toHeaderValue($ev_api_key);
        }
        // header params
        if ($ev_access_token !== null) {
            $headerParams['ev-access-token'] = ObjectSerializer::toHeaderValue($ev_access_token);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation sendWelcomeEmail
     *
     * Resend welcome email to specific user
     *
     * @param  string $ev_api_key API Key required to make the API call. (required)
     * @param  string $ev_access_token Access token required to make the API call. (required)
     * @param  string $username A username to send the welcome email to. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\EmptyResponse
     */
    public function sendWelcomeEmail($ev_api_key, $ev_access_token, $username)
    {
        list($response) = $this->sendWelcomeEmailWithHttpInfo($ev_api_key, $ev_access_token, $username);
        return $response;
    }

    /**
     * Operation sendWelcomeEmailWithHttpInfo
     *
     * Resend welcome email to specific user
     *
     * @param  string $ev_api_key API Key required to make the API call. (required)
     * @param  string $ev_access_token Access token required to make the API call. (required)
     * @param  string $username A username to send the welcome email to. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\EmptyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendWelcomeEmailWithHttpInfo($ev_api_key, $ev_access_token, $username)
    {
        $returnType = '\Swagger\Client\Model\EmptyResponse';
        $request = $this->sendWelcomeEmailRequest($ev_api_key, $ev_access_token, $username);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\EmptyResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sendWelcomeEmailAsync
     *
     * Resend welcome email to specific user
     *
     * @param  string $ev_api_key API Key required to make the API call. (required)
     * @param  string $ev_access_token Access token required to make the API call. (required)
     * @param  string $username A username to send the welcome email to. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendWelcomeEmailAsync($ev_api_key, $ev_access_token, $username)
    {
        return $this->sendWelcomeEmailAsyncWithHttpInfo($ev_api_key, $ev_access_token, $username)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendWelcomeEmailAsyncWithHttpInfo
     *
     * Resend welcome email to specific user
     *
     * @param  string $ev_api_key API Key required to make the API call. (required)
     * @param  string $ev_access_token Access token required to make the API call. (required)
     * @param  string $username A username to send the welcome email to. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendWelcomeEmailAsyncWithHttpInfo($ev_api_key, $ev_access_token, $username)
    {
        $returnType = '\Swagger\Client\Model\EmptyResponse';
        $request = $this->sendWelcomeEmailRequest($ev_api_key, $ev_access_token, $username);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sendWelcomeEmail'
     *
     * @param  string $ev_api_key API Key required to make the API call. (required)
     * @param  string $ev_access_token Access token required to make the API call. (required)
     * @param  string $username A username to send the welcome email to. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sendWelcomeEmailRequest($ev_api_key, $ev_access_token, $username)
    {
        // verify the required parameter 'ev_api_key' is set
        if ($ev_api_key === null || (is_array($ev_api_key) && count($ev_api_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ev_api_key when calling sendWelcomeEmail'
            );
        }
        // verify the required parameter 'ev_access_token' is set
        if ($ev_access_token === null || (is_array($ev_access_token) && count($ev_access_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ev_access_token when calling sendWelcomeEmail'
            );
        }
        // verify the required parameter 'username' is set
        if ($username === null || (is_array($username) && count($username) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $username when calling sendWelcomeEmail'
            );
        }

        $resourcePath = '/email/welcome/{username}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($ev_api_key !== null) {
            $headerParams['ev-api-key'] = ObjectSerializer::toHeaderValue($ev_api_key);
        }
        // header params
        if ($ev_access_token !== null) {
            $headerParams['ev-access-token'] = ObjectSerializer::toHeaderValue($ev_access_token);
        }

        // path params
        if ($username !== null) {
            $resourcePath = str_replace(
                '{' . 'username' . '}',
                ObjectSerializer::toPathValue($username),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}