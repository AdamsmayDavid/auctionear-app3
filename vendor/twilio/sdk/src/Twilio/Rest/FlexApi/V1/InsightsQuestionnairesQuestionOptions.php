<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Flex
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\FlexApi\V1;

use Twilio\Options;
use Twilio\Values;

abstract class InsightsQuestionnairesQuestionOptions
{
    /**
     * @param string $description The description for the question.
     * @param string $authorization The Authorization HTTP request header
     * @return CreateInsightsQuestionnairesQuestionOptions Options builder
     */
    public static function create(
        
        string $description = Values::NONE,
        string $authorization = Values::NONE

    ): CreateInsightsQuestionnairesQuestionOptions
    {
        return new CreateInsightsQuestionnairesQuestionOptions(
            $description,
            $authorization
        );
    }

    /**
     * @param string $authorization The Authorization HTTP request header
     * @return DeleteInsightsQuestionnairesQuestionOptions Options builder
     */
    public static function delete(
        
        string $authorization = Values::NONE

    ): DeleteInsightsQuestionnairesQuestionOptions
    {
        return new DeleteInsightsQuestionnairesQuestionOptions(
            $authorization
        );
    }

    /**
     * @param string[] $categorySid The list of category SIDs
     * @param string $authorization The Authorization HTTP request header
     * @return ReadInsightsQuestionnairesQuestionOptions Options builder
     */
    public static function read(
        
        array $categorySid = Values::ARRAY_NONE,
        string $authorization = Values::NONE

    ): ReadInsightsQuestionnairesQuestionOptions
    {
        return new ReadInsightsQuestionnairesQuestionOptions(
            $categorySid,
            $authorization
        );
    }

    /**
     * @param string $categorySid The SID of the category
     * @param string $question The question.
     * @param string $description The description for the question.
     * @param string $answerSetId The answer_set for the question.
     * @param string $authorization The Authorization HTTP request header
     * @return UpdateInsightsQuestionnairesQuestionOptions Options builder
     */
    public static function update(
        
        string $categorySid = Values::NONE,
        string $question = Values::NONE,
        string $description = Values::NONE,
        string $answerSetId = Values::NONE,
        string $authorization = Values::NONE

    ): UpdateInsightsQuestionnairesQuestionOptions
    {
        return new UpdateInsightsQuestionnairesQuestionOptions(
            $categorySid,
            $question,
            $description,
            $answerSetId,
            $authorization
        );
    }

}

class CreateInsightsQuestionnairesQuestionOptions extends Options
    {
    /**
     * @param string $description The description for the question.
     * @param string $authorization The Authorization HTTP request header
     */
    public function __construct(
        
        string $description = Values::NONE,
        string $authorization = Values::NONE

    ) {
        $this->options['description'] = $description;
        $this->options['authorization'] = $authorization;
    }

    /**
     * The description for the question.
     *
     * @param string $description The description for the question.
     * @return $this Fluent Builder
     */
    public function setDescription(string $description): self
    {
        $this->options['description'] = $description;
        return $this;
    }

    /**
     * The Authorization HTTP request header
     *
     * @param string $authorization The Authorization HTTP request header
     * @return $this Fluent Builder
     */
    public function setAuthorization(string $authorization): self
    {
        $this->options['authorization'] = $authorization;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.FlexApi.V1.CreateInsightsQuestionnairesQuestionOptions ' . $options . ']';
    }
}

class DeleteInsightsQuestionnairesQuestionOptions extends Options
    {
    /**
     * @param string $authorization The Authorization HTTP request header
     */
    public function __construct(
        
        string $authorization = Values::NONE

    ) {
        $this->options['authorization'] = $authorization;
    }

    /**
     * The Authorization HTTP request header
     *
     * @param string $authorization The Authorization HTTP request header
     * @return $this Fluent Builder
     */
    public function setAuthorization(string $authorization): self
    {
        $this->options['authorization'] = $authorization;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.FlexApi.V1.DeleteInsightsQuestionnairesQuestionOptions ' . $options . ']';
    }
}

class ReadInsightsQuestionnairesQuestionOptions extends Options
    {
    /**
     * @param string[] $categorySid The list of category SIDs
     * @param string $authorization The Authorization HTTP request header
     */
    public function __construct(
        
        array $categorySid = Values::ARRAY_NONE,
        string $authorization = Values::NONE

    ) {
        $this->options['categorySid'] = $categorySid;
        $this->options['authorization'] = $authorization;
    }

    /**
     * The list of category SIDs
     *
     * @param string[] $categorySid The list of category SIDs
     * @return $this Fluent Builder
     */
    public function setCategorySid(array $categorySid): self
    {
        $this->options['categorySid'] = $categorySid;
        return $this;
    }

    /**
     * The Authorization HTTP request header
     *
     * @param string $authorization The Authorization HTTP request header
     * @return $this Fluent Builder
     */
    public function setAuthorization(string $authorization): self
    {
        $this->options['authorization'] = $authorization;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.FlexApi.V1.ReadInsightsQuestionnairesQuestionOptions ' . $options . ']';
    }
}

class UpdateInsightsQuestionnairesQuestionOptions extends Options
    {
    /**
     * @param string $categorySid The SID of the category
     * @param string $question The question.
     * @param string $description The description for the question.
     * @param string $answerSetId The answer_set for the question.
     * @param string $authorization The Authorization HTTP request header
     */
    public function __construct(
        
        string $categorySid = Values::NONE,
        string $question = Values::NONE,
        string $description = Values::NONE,
        string $answerSetId = Values::NONE,
        string $authorization = Values::NONE

    ) {
        $this->options['categorySid'] = $categorySid;
        $this->options['question'] = $question;
        $this->options['description'] = $description;
        $this->options['answerSetId'] = $answerSetId;
        $this->options['authorization'] = $authorization;
    }

    /**
     * The SID of the category
     *
     * @param string $categorySid The SID of the category
     * @return $this Fluent Builder
     */
    public function setCategorySid(string $categorySid): self
    {
        $this->options['categorySid'] = $categorySid;
        return $this;
    }

    /**
     * The question.
     *
     * @param string $question The question.
     * @return $this Fluent Builder
     */
    public function setQuestion(string $question): self
    {
        $this->options['question'] = $question;
        return $this;
    }

    /**
     * The description for the question.
     *
     * @param string $description The description for the question.
     * @return $this Fluent Builder
     */
    public function setDescription(string $description): self
    {
        $this->options['description'] = $description;
        return $this;
    }

    /**
     * The answer_set for the question.
     *
     * @param string $answerSetId The answer_set for the question.
     * @return $this Fluent Builder
     */
    public function setAnswerSetId(string $answerSetId): self
    {
        $this->options['answerSetId'] = $answerSetId;
        return $this;
    }

    /**
     * The Authorization HTTP request header
     *
     * @param string $authorization The Authorization HTTP request header
     * @return $this Fluent Builder
     */
    public function setAuthorization(string $authorization): self
    {
        $this->options['authorization'] = $authorization;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.FlexApi.V1.UpdateInsightsQuestionnairesQuestionOptions ' . $options . ']';
    }
}

