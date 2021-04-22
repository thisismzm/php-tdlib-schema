<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a remote file.
 */
class RemoteFile extends TdObject
{
    public const TYPE_NAME = 'remoteFile';

    /**
     * Remote file identifier; may be empty. Can be used by the current user across application restarts or even from other devices. Uniquely identifies a file, but a file can have a lot of different valid identifiers. If the ID starts with "http://" or "https://", it represents the HTTP URL of the file. TDLib is currently unable to download files if only their URL is known. If downloadFile is called on such a file or if it is sent to a secret chat, TDLib starts a file generation process by sending updateFileGenerationStart to the application with the HTTP URL in the original_path and "#url#" as the conversion string. Application should generate the file by downloading it to the specified location.
     */
    protected string $id;

    /**
     * Unique file identifier; may be empty if unknown. The unique file identifier which is the same for the same file even for different users and is persistent over time.
     */
    protected string $uniqueId;

    /**
     * True, if the file is currently being uploaded (or a remote copy is being generated by some other means).
     */
    protected bool $isUploadingActive;

    /**
     * True, if a remote copy is fully available.
     */
    protected bool $isUploadingCompleted;

    /**
     * Size of the remote available part of the file; 0 if unknown.
     */
    protected int $uploadedSize;

    public function __construct(
        string $id,
        string $uniqueId,
        bool $isUploadingActive,
        bool $isUploadingCompleted,
        int $uploadedSize
    ) {
        $this->id                   = $id;
        $this->uniqueId             = $uniqueId;
        $this->isUploadingActive    = $isUploadingActive;
        $this->isUploadingCompleted = $isUploadingCompleted;
        $this->uploadedSize         = $uploadedSize;
    }

    public static function fromArray(array $array): RemoteFile
    {
        return new static(
            $array['id'],
            $array['unique_id'],
            $array['is_uploading_active'],
            $array['is_uploading_completed'],
            $array['uploaded_size'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'id'                     => $this->id,
            'unique_id'              => $this->uniqueId,
            'is_uploading_active'    => $this->isUploadingActive,
            'is_uploading_completed' => $this->isUploadingCompleted,
            'uploaded_size'          => $this->uploadedSize,
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function getIsUploadingActive(): bool
    {
        return $this->isUploadingActive;
    }

    public function getIsUploadingCompleted(): bool
    {
        return $this->isUploadingCompleted;
    }

    public function getUploadedSize(): int
    {
        return $this->uploadedSize;
    }
}
