<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\hasOne;

class Product extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock_quantity',
        'category_id',
        'status',
    ];
    /**
     * Relationship between Product and ProductAnalytic
     * 
     * An Product can have ProductAnalytic
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function analytic(): HasOne
    {
        return $this->hasOne(ProductAnalytic::class);
    }
    /**
     * Relationship between Product and ProductAttributeAssignment
     * 
     * An Product can have multiple ProductAttributeAssignment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attributes(): HasMany
    {
        return $this->hasMany(ProductAttributeAssignment::class);
    }
    /**
     * Relationship between Product and ProductBundleItem
     * 
     * An Product can have multiple productBundlesItems
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function budleItems(): HasMany
    {
        return $this->hasMany(ProductBundleItem::class);
    }
    /**
     * Relationship between Product and ProductImage
     * 
     * An Product can have multiple ProductImage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }
    /**
     * Relationship between Product and ProductNotification
     * 
     * An Product can have multiple ProductNotification
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notifications(): HasMany
    {
        return $this->hasMany(ProductNotification::class);
    }
    /**
     * Relationship between Product and ProductTagAssignment
     * 
     * An Product can have multiple ProductTagAssignment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tags(): HasMany
    {
        return $this->hasMany(ProductTagAssignment::class);
    }
    /**
     * Relationship between Product and ProductVariant
     * 
     * An Product can have multiple ProductVariant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }
    /**
     * Relationship between Product and Review
     * 
     * An Product can have multiple Review
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
    /**
     * Relationship between Product and WishlistItem
     * 
     * An Product can have multiple WishlistItem
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wishlists(): HasMany
    {
        return $this->hasMany(WishlistItem::class);
    }
    /**
     * Relationship between Product and Inventory
     * 
     * An Product can have multiple Inventory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventories(): HasMany
    {
        return $this->hasMany(Inventory::class);
    }
    /**
     * relationship between product and category
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}