<?php

declare(strict_types=1);

namespace Helloasso\Models\Forms;

use Helloasso\Enums\MembershipValidityType;
use Helloasso\Models\Common\ContactModel;
use Helloasso\Models\Common\PlaceModel;
use Helloasso\Models\HelloassoObject;

class FormQuickCreateRequest implements HelloassoObject
{
    /**
     * @var array<TierLightModel>
     */
    private array $tierList;

    private string $banner;
    private string $description;
    private \DateTime $endDate;
    private \DateTime $startDate;
    private string $logo;
    private string $privateTitle;
    private string $title;
    private int $activityTypeId;
    private PlaceModel $place;
    private \DateTime $saleEndDate;
    private \DateTime $saleStartDate;
    private MembershipValidityType $validityType;
    private bool $acceptOpenDonation;
    private bool $allowComment;
    private bool $amountVisible;
    private string $color;
    private ContactModel $contact;
    private bool $displayContributorName;
    private bool $displayParticipantsCount;
    private bool $displayRemainingEntries;
    private int $financialGoal;
    private bool $generateMembershipCards;
    private bool $generateTickets;
    private bool $invertDescriptions;
    private string $labelConditionsAndTermsFile;
    private string $longDescription;

    /**
     * @var array<int>
     */
    private array $openDonationPresetAmounts;

    private string $personalizedMessage;
    private string $projectBeneficiaries;
    private string $projectExpensesDetails;
    private string $projectOwners;
    private string $projectTargetCountry;
    private int $maxEntries;

    /**
     * @return TierLightModel[]
     */
    public function getTierList(): array
    {
        return $this->tierList;
    }

    /**
     * @param TierLightModel[] $tierList
     */
    public function setTierList(array $tierList): self
    {
        $this->tierList = $tierList;

        return $this;
    }

    public function getBanner(): string
    {
        return $this->banner;
    }

    public function setBanner(string $banner): self
    {
        $this->banner = $banner;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTime $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTime $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getLogo(): string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getPrivateTitle(): string
    {
        return $this->privateTitle;
    }

    public function setPrivateTitle(string $privateTitle): self
    {
        $this->privateTitle = $privateTitle;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getActivityTypeId(): int
    {
        return $this->activityTypeId;
    }

    public function setActivityTypeId(int $activityTypeId): self
    {
        $this->activityTypeId = $activityTypeId;

        return $this;
    }

    public function getPlace(): PlaceModel
    {
        return $this->place;
    }

    public function setPlace(PlaceModel $place): self
    {
        $this->place = $place;

        return $this;
    }

    public function getSaleEndDate(): \DateTime
    {
        return $this->saleEndDate;
    }

    public function setSaleEndDate(\DateTime $saleEndDate): self
    {
        $this->saleEndDate = $saleEndDate;

        return $this;
    }

    public function getSaleStartDate(): \DateTime
    {
        return $this->saleStartDate;
    }

    public function setSaleStartDate(\DateTime $saleStartDate): self
    {
        $this->saleStartDate = $saleStartDate;

        return $this;
    }

    public function getValidityType(): MembershipValidityType
    {
        return $this->validityType;
    }

    public function setValidityType(MembershipValidityType $validityType): self
    {
        $this->validityType = $validityType;

        return $this;
    }

    public function isAcceptOpenDonation(): bool
    {
        return $this->acceptOpenDonation;
    }

    public function setAcceptOpenDonation(bool $acceptOpenDonation): self
    {
        $this->acceptOpenDonation = $acceptOpenDonation;

        return $this;
    }

    public function isAllowComment(): bool
    {
        return $this->allowComment;
    }

    public function setAllowComment(bool $allowComment): self
    {
        $this->allowComment = $allowComment;

        return $this;
    }

    public function isAmountVisible(): bool
    {
        return $this->amountVisible;
    }

    public function setAmountVisible(bool $amountVisible): self
    {
        $this->amountVisible = $amountVisible;

        return $this;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getContact(): ContactModel
    {
        return $this->contact;
    }

    public function setContact(ContactModel $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function isDisplayContributorName(): bool
    {
        return $this->displayContributorName;
    }

    public function setDisplayContributorName(bool $displayContributorName): self
    {
        $this->displayContributorName = $displayContributorName;

        return $this;
    }

    public function isDisplayParticipantsCount(): bool
    {
        return $this->displayParticipantsCount;
    }

    public function setDisplayParticipantsCount(bool $displayParticipantsCount): self
    {
        $this->displayParticipantsCount = $displayParticipantsCount;

        return $this;
    }

    public function isDisplayRemainingEntries(): bool
    {
        return $this->displayRemainingEntries;
    }

    public function setDisplayRemainingEntries(bool $displayRemainingEntries): self
    {
        $this->displayRemainingEntries = $displayRemainingEntries;

        return $this;
    }

    public function getFinancialGoal(): int
    {
        return $this->financialGoal;
    }

    public function setFinancialGoal(int $financialGoal): self
    {
        $this->financialGoal = $financialGoal;

        return $this;
    }

    public function isGenerateMembershipCards(): bool
    {
        return $this->generateMembershipCards;
    }

    public function setGenerateMembershipCards(bool $generateMembershipCards): self
    {
        $this->generateMembershipCards = $generateMembershipCards;

        return $this;
    }

    public function isGenerateTickets(): bool
    {
        return $this->generateTickets;
    }

    public function setGenerateTickets(bool $generateTickets): self
    {
        $this->generateTickets = $generateTickets;

        return $this;
    }

    public function isInvertDescriptions(): bool
    {
        return $this->invertDescriptions;
    }

    public function setInvertDescriptions(bool $invertDescriptions): self
    {
        $this->invertDescriptions = $invertDescriptions;

        return $this;
    }

    public function getLabelConditionsAndTermsFile(): string
    {
        return $this->labelConditionsAndTermsFile;
    }

    public function setLabelConditionsAndTermsFile(string $labelConditionsAndTermsFile): self
    {
        $this->labelConditionsAndTermsFile = $labelConditionsAndTermsFile;

        return $this;
    }

    public function getLongDescription(): string
    {
        return $this->longDescription;
    }

    public function setLongDescription(string $longDescription): self
    {
        $this->longDescription = $longDescription;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getOpenDonationPresetAmounts(): array
    {
        return $this->openDonationPresetAmounts;
    }

    /**
     * @param int[] $openDonationPresetAmounts
     */
    public function setOpenDonationPresetAmounts(array $openDonationPresetAmounts): self
    {
        $this->openDonationPresetAmounts = $openDonationPresetAmounts;

        return $this;
    }

    public function getPersonalizedMessage(): string
    {
        return $this->personalizedMessage;
    }

    public function setPersonalizedMessage(string $personalizedMessage): self
    {
        $this->personalizedMessage = $personalizedMessage;

        return $this;
    }

    public function getProjectBeneficiaries(): string
    {
        return $this->projectBeneficiaries;
    }

    public function setProjectBeneficiaries(string $projectBeneficiaries): self
    {
        $this->projectBeneficiaries = $projectBeneficiaries;

        return $this;
    }

    public function getProjectExpensesDetails(): string
    {
        return $this->projectExpensesDetails;
    }

    public function setProjectExpensesDetails(string $projectExpensesDetails): self
    {
        $this->projectExpensesDetails = $projectExpensesDetails;

        return $this;
    }

    public function getProjectOwners(): string
    {
        return $this->projectOwners;
    }

    public function setProjectOwners(string $projectOwners): self
    {
        $this->projectOwners = $projectOwners;

        return $this;
    }

    public function getProjectTargetCountry(): string
    {
        return $this->projectTargetCountry;
    }

    public function setProjectTargetCountry(string $projectTargetCountry): self
    {
        $this->projectTargetCountry = $projectTargetCountry;

        return $this;
    }

    public function getMaxEntries(): int
    {
        return $this->maxEntries;
    }

    public function setMaxEntries(int $maxEntries): self
    {
        $this->maxEntries = $maxEntries;

        return $this;
    }
}
